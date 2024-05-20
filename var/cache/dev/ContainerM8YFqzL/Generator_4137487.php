<?php

namespace ContainerM8YFqzL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'tests'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Tests'.\DIRECTORY_SEPARATOR.'Fixture'.\DIRECTORY_SEPARATOR.'Generator.php';

class Generator_4137487 extends \Eccube\Tests\Fixture\Generator implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Eccube\Tests\Fixture\Generator|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera50b2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer15995 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties073e0 = [
        
    ];

    public function createMember($username = null)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'createMember', array('username' => $username), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->createMember($username);
    }

    public function createCustomer($email = null)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'createCustomer', array('email' => $email), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->createCustomer($email);
    }

    public function createCustomerAddress(\Eccube\Entity\Customer $Customer, $is_nonmember = false)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'createCustomerAddress', array('Customer' => $Customer, 'is_nonmember' => $is_nonmember), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->createCustomerAddress($Customer, $is_nonmember);
    }

    public function createNonMember($email = null)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'createNonMember', array('email' => $email), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->createNonMember($email);
    }

    public function createProduct($product_name = null, $product_class_num = 3, $with_image = false)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'createProduct', array('product_name' => $product_name, 'product_class_num' => $product_class_num, 'with_image' => $with_image), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->createProduct($product_name, $product_class_num, $with_image);
    }

    public function createOrder(\Eccube\Entity\Customer $Customer, array $ProductClasses = [], ?\Eccube\Entity\Delivery $Delivery = null, $add_charge = 0, $add_discount = 0, $statusTypeId = null)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'createOrder', array('Customer' => $Customer, 'ProductClasses' => $ProductClasses, 'Delivery' => $Delivery, 'add_charge' => $add_charge, 'add_discount' => $add_discount, 'statusTypeId' => $statusTypeId), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->createOrder($Customer, $ProductClasses, $Delivery, $add_charge, $add_discount, $statusTypeId);
    }

    public function createPayment(\Eccube\Entity\Delivery $Delivery, $method, $charge = 0, $rule_min = 0, $rule_max = 999999999)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'createPayment', array('Delivery' => $Delivery, 'method' => $method, 'charge' => $charge, 'rule_min' => $rule_min, 'rule_max' => $rule_max), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->createPayment($Delivery, $method, $charge, $rule_min, $rule_max);
    }

    public function createDelivery($delivery_time_max_pattern = 5)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'createDelivery', array('delivery_time_max_pattern' => $delivery_time_max_pattern), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->createDelivery($delivery_time_max_pattern);
    }

    public function createPage()
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'createPage', array(), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->createPage();
    }

    public function createLoginHistory($user_name, $client_ip = null, $status = null, $Member = null)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'createLoginHistory', array('user_name' => $user_name, 'client_ip' => $client_ip, 'status' => $status, 'Member' => $Member), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->createLoginHistory($user_name, $client_ip, $status, $Member);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->locale, $instance->entityManager, $instance->passwordEncoder, $instance->memberRepository, $instance->customerRepository, $instance->classNameRepository, $instance->classCategoryRepository, $instance->durationRepository, $instance->deliveryFeeRepository, $instance->paymentRepository, $instance->taxRuleRepository, $instance->pageRepository, $instance->PrefRepository, $instance->session, $instance->orderPurchaseFlow);

        \Closure::bind(function (\Eccube\Tests\Fixture\Generator $instance) {
            unset($instance->categoryRepository, $instance->tagRepository, $instance->prefRepository);
        }, $instance, 'Eccube\\Tests\\Fixture\\Generator')->__invoke($instance);

        $instance->initializer15995 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Security\Core\Encoder\PasswordEncoder $passwordEncoder, \Eccube\Repository\MemberRepository $memberRepository, \Eccube\Repository\CategoryRepository $categoryRepository, \Eccube\Repository\CustomerRepository $customerRepository, \Eccube\Repository\ClassNameRepository $classNameRepository, \Eccube\Repository\ClassCategoryRepository $classCategoryRepository, \Eccube\Repository\DeliveryDurationRepository $durationRepository, \Eccube\Repository\DeliveryFeeRepository $deliveryFeeRepository, \Eccube\Repository\PaymentRepository $paymentRepository, \Eccube\Repository\PageRepository $pageRepository, \Eccube\Repository\Master\PrefRepository $prefRepository, \Eccube\Repository\TagRepository $tagRepository, \Eccube\Repository\TaxRuleRepository $taxRuleRepository, \Eccube\Service\PurchaseFlow\PurchaseFlow $orderPurchaseFlow, \Symfony\Component\HttpFoundation\Session\SessionInterface $session, $locale = 'ja_JP')
    {
        static $reflection;

        if (! $this->valueHoldera50b2) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');
            $this->valueHoldera50b2 = $reflection->newInstanceWithoutConstructor();
        unset($this->locale, $this->entityManager, $this->passwordEncoder, $this->memberRepository, $this->customerRepository, $this->classNameRepository, $this->classCategoryRepository, $this->durationRepository, $this->deliveryFeeRepository, $this->paymentRepository, $this->taxRuleRepository, $this->pageRepository, $this->PrefRepository, $this->session, $this->orderPurchaseFlow);

        \Closure::bind(function (\Eccube\Tests\Fixture\Generator $instance) {
            unset($instance->categoryRepository, $instance->tagRepository, $instance->prefRepository);
        }, $this, 'Eccube\\Tests\\Fixture\\Generator')->__invoke($this);

        }

        $this->valueHoldera50b2->__construct($entityManager, $passwordEncoder, $memberRepository, $categoryRepository, $customerRepository, $classNameRepository, $classCategoryRepository, $durationRepository, $deliveryFeeRepository, $paymentRepository, $pageRepository, $prefRepository, $tagRepository, $taxRuleRepository, $orderPurchaseFlow, $session, $locale);
    }

    public function & __get($name)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, '__get', ['name' => $name], $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        if (isset(self::$publicProperties073e0[$name])) {
            return $this->valueHoldera50b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera50b2;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera50b2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera50b2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera50b2;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, '__isset', array('name' => $name), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera50b2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera50b2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, '__unset', array('name' => $name), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Tests\\Fixture\\Generator');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera50b2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera50b2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, '__clone', array(), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        $this->valueHoldera50b2 = clone $this->valueHoldera50b2;
    }

    public function __sleep()
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, '__sleep', array(), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return array('valueHoldera50b2');
    }

    public function __wakeup()
    {
        unset($this->locale, $this->entityManager, $this->passwordEncoder, $this->memberRepository, $this->customerRepository, $this->classNameRepository, $this->classCategoryRepository, $this->durationRepository, $this->deliveryFeeRepository, $this->paymentRepository, $this->taxRuleRepository, $this->pageRepository, $this->PrefRepository, $this->session, $this->orderPurchaseFlow);

        \Closure::bind(function (\Eccube\Tests\Fixture\Generator $instance) {
            unset($instance->categoryRepository, $instance->tagRepository, $instance->prefRepository);
        }, $this, 'Eccube\\Tests\\Fixture\\Generator')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer15995 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer15995;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'initializeProxy', array(), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera50b2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera50b2;
    }
}

if (!\class_exists('Generator_4137487', false)) {
    \class_alias(__NAMESPACE__.'\\Generator_4137487', 'Generator_4137487', false);
}
