<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Eccube\Repository\ProductRepository;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Eccube\Repository\CustomerRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\AuthenticationException;


class TopController extends AbstractController
{
    /**
    * @var ProductRepository
    */
    protected $productRepository;

    /**
    * TopController constructor.
    *
    * @param ProductRepository $productRepository
    */

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @Route("/", name="homepage", methods={"GET"})
     * @Template("index.twig")
     */
    public function index(Request $request, AuthenticationManagerInterface $authenticationManager, TokenStorageInterface $tokenStorage, CustomerRepository $customerRepository)
    {
        $response = new Response();
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
        $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, Authorization');
        $customer_email = null;
        if($request->query->get('key')){
            $encryptedData = $request->query->get('key');
            if($encryptedData){
                $encryptedData = base64_decode($encryptedData);
            }
            $method = "AES-256-CBC";
            $key = "encryptionKey123";
            $options = 0;
            $iv = '1234567891011121';
            $customer_email = openssl_decrypt($encryptedData, $method, $key, $options, $iv);
        }
        if($customer_email){
            $user = $customerRepository->getRegularCustomerByEmail($customer_email);
            if($user){
                $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                if($token){
                    try {
                        $authenticatedToken = $authenticationManager->authenticate($token);
                        if($authenticatedToken){
                            $tokenStorage->setToken($authenticatedToken);
                            $this->eventDispatcher->dispatch(new InteractiveLoginEvent($request, $authenticatedToken));
                        }
                    }
                    catch (AuthenticationException $exception) {
                        //
                    }
                }
            }
        }

        $newArrivalProducts = $this->productRepository->getQueryBuilderBygetNewArrivalByCategory();
        return [
            'newArrivalProducts' => $newArrivalProducts,
        ];
    }
}
