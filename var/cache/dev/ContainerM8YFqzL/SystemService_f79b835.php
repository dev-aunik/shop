<?php

namespace ContainerM8YFqzL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SystemService.php';

class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Eccube\Service\SystemService|null wrapped object, if the proxy is initialized
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

    public function getDbversion()
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'getDbversion', array(), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->getDbversion();
    }

    public function canSetMemoryLimit($memory)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->canSetMemoryLimit($memory);
    }

    public function getMemoryLimit()
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'getMemoryLimit', array(), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->getMemoryLimit();
    }

    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->switchMaintenance($isEnable, $mode, $force);
    }

    public function getMaintenanceToken() : ?string
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'getMaintenanceToken', array(), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->getMaintenanceToken();
    }

    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\TerminateEvent $event)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->disableMaintenanceEvent($event);
    }

    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        $this->valueHoldera50b2->enableMaintenance($mode, $force);
return;
    }

    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'disableMaintenance', array('mode' => $mode), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->disableMaintenance($mode);
    }

    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        $this->valueHoldera50b2->disableMaintenanceNow($mode, $force);
return;
    }

    public function isMaintenanceMode()
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'isMaintenanceMode', array(), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->isMaintenanceMode();
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

        unset($instance->entityManager, $instance->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);

        $instance->initializer15995 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;

        if (! $this->valueHoldera50b2) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHoldera50b2 = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);

        }

        $this->valueHoldera50b2->__construct($entityManager, $container);
    }

    public function & __get($name)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, '__get', ['name' => $name], $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        if (isset(self::$publicProperties073e0[$name])) {
            return $this->valueHoldera50b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

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
        unset($this->entityManager, $this->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
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

if (!\class_exists('SystemService_f79b835', false)) {
    \class_alias(__NAMESPACE__.'\\SystemService_f79b835', 'SystemService_f79b835', false);
}
