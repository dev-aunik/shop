<?php

namespace Customize\Controller;

use Eccube\Util\StringUtil;
use Eccube\Common\EccubeConfig;
use Eccube\Entity\Master\CustomerStatus;
use Eccube\Repository\CustomerRepository;
use Eccube\Controller\AbstractController;
use Symfony\Component\Validator\Validation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Eccube\Repository\Master\CustomerStatusRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Customize\Controller\DatabaseConnectionController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Eccube\Entity\Customer;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class CustomerController extends AbstractController
{
    /**
     * @var \Eccube\Common\EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var CustomerStatusRepository
     */
    protected $customerStatusRepository;

    /**
     * @var CustomerRepository
     */
    protected $customerRepository;

    /**
     * @var EncoderFactoryInterface
     */
    protected $encoderFactory;

    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;


    /**
     * EntryController constructor.
     *
     * @param EccubeConfig $eccubeConfig
     * @param CustomerStatusRepository $customerStatusRepository
     * @param CustomerRepository $customerRepository
     * @param EncoderFactoryInterface $encoderFactory
     */
    public function __construct(
        EccubeConfig $eccubeConfig,
        CustomerStatusRepository $customerStatusRepository,
        CustomerRepository $customerRepository,
        EncoderFactoryInterface $encoderFactory,
        EventDispatcherInterface $eventDispatcher
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->customerStatusRepository = $customerStatusRepository;
        $this->customerRepository = $customerRepository;
        $this->encoderFactory = $encoderFactory;
        $this->eventDispatcher = $eventDispatcher;
    }

    use DatabaseConnectionController;

    private function customValidation($method, $customer_id = null)
    {
        $all_validations =  [
            'pref_id' => [
                new Assert\NotBlank([]),
                new Assert\Callback([
                    'callback' => function ($value, $context) {
                        $queryBuilder = $this->connection()->createQueryBuilder();
                        $queryBuilder
                            ->select('id')
                            ->from('mtb_pref')
                            ->where('id = :prefId')
                            ->setParameter('prefId', $value);
                        $pref = $queryBuilder->execute()->fetchAll();

                        if (count($pref) == 0) {
                            $context->buildViolation('有効な値ではありません。')
                                ->addViolation();
                        }
                    },
                ]),
            ],
            'kana01' => [
                new Assert\NotBlank([]),
                new Assert\Regex([
                    'pattern' => '/^[ァ-ヶｦ-ﾟー]+$/u',
                    'message' => 'form_error.kana_only',
                ]),
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_kana_len'],
                ]),
            ],
            'kana02' => [
                new Assert\NotBlank([]),
                new Assert\Regex([
                    'pattern' => '/^[ァ-ヶｦ-ﾟー]+$/u',
                    'message' => 'form_error.kana_only',
                ]),
                new Assert\Length([
                    'max' => $this->eccubeConfig['eccube_kana_len'],
                ]),
            ],
            'phone_number' => [
                new Assert\NotBlank([]),
                new Assert\Type(['type' => 'digit', 'message' => 'form_error.numeric_only']),
                new Assert\Length(
                    ['max' => $this->eccubeConfig['eccube_tel_len_max']]
                ),
            ],
            'postal_code' => [
                new Assert\NotBlank([]),
                new Assert\Type(['type' => 'digit', 'message' => 'form_error.numeric_only']),
                new Assert\Length(
                    ['max' => $this->eccubeConfig['eccube_postal_code']]
                ),
            ],
            'addr01' => [
                new Assert\NotBlank([]),
                new Assert\Length(['max' => $this->eccubeConfig['eccube_address1_len']]),
            ],
            'addr02' => [
                new Assert\NotBlank([]),
                new Assert\Length(['max' => $this->eccubeConfig['eccube_address2_len']]),
            ],
            'email' => [
                new Assert\NotBlank([]),
                new Assert\Callback([
                    'callback' => function ($value, $context) use ($method, $customer_id) {
                        $queryBuilder = $this->connection()->createQueryBuilder();

                        if ($method == 'update') {
                            $queryBuilder
                                ->select('id')
                                ->from('dtb_customer')
                                ->where('email = :email')
                                ->andWhere('id != :customer_id')
                                ->setParameter('email', $value)
                                ->setParameter('customer_id', $customer_id);
                            $existingCustomer = $queryBuilder->execute()->fetchAll();

                            if (!empty($existingCustomer)) {
                                $context->buildViolation('form_error.customer_already_exists')
                                    ->addViolation();
                            }
                        } else {
                            $queryBuilder
                                ->select('id')
                                ->from('dtb_customer')
                                ->where('email = :email')
                                ->setParameter('email', $value);
                            $existingCustomer = $queryBuilder->execute()->fetchAll();

                            if (!empty($existingCustomer)) {
                                $context->buildViolation('form_error.customer_already_exists')
                                    ->addViolation();
                            }
                        }
                    },
                ]),
            ],
            'password' => [
                new Assert\NotBlank([]),
                new Assert\Length([
                    'min' => $this->eccubeConfig['eccube_password_min_len'],
                    'max' => $this->eccubeConfig['eccube_password_max_len'],
                ]),
                new Assert\Regex([
                    'pattern' => $this->eccubeConfig['eccube_password_pattern'],
                    'message' => 'form_error.password_pattern_invalid',
                ]),
            ],
        ];
        return $all_validations;
    }

    /**
     * @Method("GET")
     * @Route("/api/custom_login", name="custom_login")
     */
    public function customLogin(Request $request, AuthenticationManagerInterface $authenticationManager, TokenStorageInterface $tokenStorage)
    {
        $response = new Response();
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        $customer_email = $request->query->get('customer_email');
        if($customer_email){
            $user = $this->customerRepository->getRegularCustomerByEmail($customer_email);
            if($user){
                $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                if($token){
                    try {
                        $authenticatedToken = $authenticationManager->authenticate($token);
                        if($authenticatedToken){
                            $tokenStorage->setToken($authenticatedToken);
                            $this->eventDispatcher->dispatch(new InteractiveLoginEvent($request, $authenticatedToken));
                        }
                        return $this->json(['message' => 'Authentication successful']);
                    }
                    catch (AuthenticationException $exception) {
                        return $this->json(['message' => 'Authentication failed'], 401);
                    }
                }
            }
        }
    }


    /**
     * @Method("GET")
     * @Route("/api/customers_list")
     */
    public function viewCustomersList(Request $request)
    {
        $customer_email = $request->query->get('customer_email');
        $customer_id = $request->query->get('customer_id');

        $queryBuilder = $this->connection()->createQueryBuilder();
        $queryBuilder
            ->select('*')
            ->from('dtb_customer');
        if ($customer_id) {
            $queryBuilder
                ->andWhere('id = :customer_id')
                ->setParameter('customer_id', $customer_id);
        }
        if ($customer_email) {
            $queryBuilder
                ->andWhere('email = :customer_email')
                ->setParameter('customer_email', $customer_email);
        }
        try {
            $results = $queryBuilder->execute()->fetchAll();
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'data' => [
                    'requested' => [
                        'customer_email' => $customer_email,
                        'customer_id' => $customer_id,
                    ],
                    'response' => [
                        'data' => $results,
                    ],
                ],
                'message' => 'データの取得に成功しました。',
            ]);

        } catch (\Exception $e) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'data' => [
                    'requested' => [
                        'customer_email' => $customer_email,
                        'customer_id' => $customer_id,
                    ],
                ],
                'error' => [
                    'key' => $e->getMessageTemplate(),
                ],
            ]);
        }
    }

    /**
     * @Method("POST")
     * @Route("/api/add_customer")
     */
    public function addCustomer(Request $request)
    {
        $data = [
            'pref_id' => $request->request->get('pref_id'),
            'name01' => $request->request->get('name01'),
            'name02' => $request->request->get('name02'),
            'kana01' => $request->request->get('kana01'),
            'kana02' => $request->request->get('kana02'),
            'postal_code' => $request->request->get('postal_code'),
            'addr01' => $request->request->get('addr01'),
            'addr02' => $request->request->get('addr02'),
            'phone_number' => $request->request->get('phone_number'),
            'email' => $request->request->get('email'),
            'password' => $request->request->get('password'),
        ];

        $validator = Validation::createValidator();

        $commonConstraints = $this->customValidation('store');

        $validationMessages = [];
        foreach ($commonConstraints as $field => $constraints) {
            $violations = $validator->validate($data[$field], $constraints);
            if (count($violations) > 0) {
                foreach ($violations as $violation) {
                    $translationKey = $violation->getMessageTemplate();
                    $parameters = $violation->getParameters();
                    $translatedMessage = $this->translator->trans($translationKey, $parameters, 'validators');

                    $validationMessages[$field][] = $translatedMessage;
                }
            }
        }

        if (!empty($validationMessages)) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'data' => [
                    'requested' => $data,
                ],
                'error' => $validationMessages,
            ]);
        }

        $Customer = $this->customerRepository->newCustomer();
        $encoder = $this->encoderFactory->getEncoder($Customer);
        $salt = $encoder->createSalt();
        $password = $encoder->encodePassword($data['password'], $salt);
        $secretKey = StringUtil::random(32);
        $CustomerStatus = $this->customerStatusRepository->find(CustomerStatus::REGULAR);
        $Pref = $this->entityManager->find(\Eccube\Entity\Master\Pref::class,  $data['pref_id']);
        $Customer
            ->setStatus($CustomerStatus)
            ->setPref($Pref)
            ->setName01($data['name01'])
            ->setName02($data['name02'])
            ->setKana01($data['kana01'])
            ->setKana02($data['kana02'])
            ->setPostalCode($data['postal_code'])
            ->setAddr01($data['addr01'])
            ->setAddr02($data['addr02'])
            ->setPhoneNumber($data['phone_number'])
            ->setEmail($data['email'])
            ->setSalt($salt)
            ->setPassword($password)
            ->setSecretKey($secretKey)
            ->setPoint(0);

        $this->entityManager->persist($Customer);
        $this->entityManager->flush();

        $customer_id = $Customer->getId();

        return new JsonResponse([
            'status_code' => JsonResponse::HTTP_OK,
            'success' => true,
            'data' => [
                'requested' => $data,
                'response' => [
                    'customer_id' => $customer_id,
                ],
            ],
            'message' => '会員登録ありがとうございます',
        ]);
    }


    /**
     * @Method("POST")
     * @Route("/api/update_customer/{customer_id}")
     */
    public function updateCustomerProfile(Request $request, $customer_id)
    {
        $customer = $this->customerRepository->find($customer_id);

        if (!$customer) {
            return new JsonResponse(
                [
                    'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                    'success' => false,
                    'error' => [
                        'customer_id' => 'メール履歴はありません。',
                    ],
                ]
            );
        }

        $requestData = [
            'pref_id' => $request->request->get('pref_id'),
            'email' => $request->request->get('email'),
            'name01' => $request->request->get('name01'),
            'name02' => $request->request->get('name02'),
            'kana01' => $request->request->get('kana01'),
            'kana02' => $request->request->get('kana02'),
            'postal_code' => $request->request->get('postal_code'),
            'addr01' => $request->request->get('addr01'),
            'addr02' => $request->request->get('addr02'),
            'phone_number' => $request->request->get('phone_number'),
        ];

        $requestData = array_filter($requestData, function ($value) {
            return $value !== null && $value !== '';
        });

        $validator = Validation::createValidator();

        $constraints = $this->customValidation('update', $customer_id);

        $validationMessages = [];
        foreach ($constraints as $field => $fieldConstraints) {
            if (array_key_exists($field, $requestData)) {
                $violations = $validator->validate($requestData[$field], $fieldConstraints);

                if (count($violations) > 0) {
                    foreach ($violations as $violation) {
                        $translationKey = $violation->getMessageTemplate();
                        $parameters = $violation->getParameters();
                        $translatedMessage = $this->translator->trans($translationKey, $parameters, 'validators');

                        $validationMessages[$field][] = $translatedMessage;
                    }
                }
            }
        }

        if (!empty($validationMessages)) {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_BAD_REQUEST,
                'success' => false,
                'data' => [
                    'requested' => $requestData,
                ],
                'error' => $validationMessages,
            ]);
        }

        $fieldsUpdated = false;

        if (isset($requestData['pref_id'])) {
            $customer->setPref($this->entityManager->find(\Eccube\Entity\Master\Pref::class, $requestData['pref_id']));
            $fieldsUpdated = true;
        }

        if (isset($requestData['email'])) {
            $customer->setEmail($requestData['email']);
            $fieldsUpdated = true;
        }

        if (isset($requestData['name01'])) {
            $customer->setName01($requestData['name01']);
            $fieldsUpdated = true;
        }

        if (isset($requestData['name02'])) {
            $customer->setName02($requestData['name02']);
            $fieldsUpdated = true;
        }

        if (isset($requestData['kana01'])) {
            $customer->setKana01($requestData['kana01']);
            $fieldsUpdated = true;
        }

        if (isset($requestData['kana02'])) {
            $customer->setKana02($requestData['kana02']);
            $fieldsUpdated = true;
        }

        if (isset($requestData['postal_code'])) {
            $customer->setPostalCode($requestData['postal_code']);
            $fieldsUpdated = true;
        }

        if (isset($requestData['addr01'])) {
            $customer->setAddr01($requestData['addr01']);
            $fieldsUpdated = true;
        }

        if (isset($requestData['addr02'])) {
            $customer->setAddr02($requestData['addr02']);
            $fieldsUpdated = true;
        }

        if (isset($requestData['phone_number'])) {
            $customer->setPhoneNumber($requestData['phone_number']);
            $fieldsUpdated = true;
        }

        $customer_data = $this->customerRepository->find($customer_id);

        if ($fieldsUpdated) {
            $this->entityManager->flush();
            $new_customer_data = [
                'id' => $customer_data->getId(),
                'email' => $customer_data->getEmail(),
                'name01' => $customer_data->getName01(),
                'name02' => $customer_data->getName02(),
                'kana01' => $customer_data->getKana01(),
                'kana02' => $customer_data->getKana02(),
                'pref' => $customer_data->getPref()->getId(),
                'postal_code' => $customer_data->getPostalCode(),
                'addr01' => $customer_data->getAddr01(),
                'addr02' => $customer_data->getAddr02(),
                'phone_number' => $customer_data->getPhoneNumber(),
            ];

            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'data' => [
                    'requested' => $requestData,
                    'response' => $new_customer_data,
                ],
                'message' => 'プロフィールは正常に更新されました。'
            ]);
        } else {
            return new JsonResponse([
                'status_code' => JsonResponse::HTTP_OK,
                'success' => true,
                'data' => [
                    'requested' => $requestData,
                ],
                'message' => '変更は検出されませんでした。プロフィールは更新されませんでした。'
            ]);
        }
    }
}
