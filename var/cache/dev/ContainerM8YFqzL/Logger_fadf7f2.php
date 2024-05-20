<?php

namespace ContainerM8YFqzL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'AbstractLogger.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Logger.php';

class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Eccube\Log\Logger|null wrapped object, if the proxy is initialized
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

    public function log($level, $message, array $context = [])
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->log($level, $message, $context);
    }

    public function emergency($message, array $context = [])
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->emergency($message, $context);
    }

    public function alert($message, array $context = [])
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->alert($message, $context);
    }

    public function critical($message, array $context = [])
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->critical($message, $context);
    }

    public function error($message, array $context = [])
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'error', array('message' => $message, 'context' => $context), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->error($message, $context);
    }

    public function warning($message, array $context = [])
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->warning($message, $context);
    }

    public function notice($message, array $context = [])
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->notice($message, $context);
    }

    public function info($message, array $context = [])
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'info', array('message' => $message, 'context' => $context), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->info($message, $context);
    }

    public function debug($message, array $context = [])
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        return $this->valueHoldera50b2->debug($message, $context);
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

        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);

        $instance->initializer15995 = $initializer;

        return $instance;
    }

    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;

        if (! $this->valueHoldera50b2) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHoldera50b2 = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);

        }

        $this->valueHoldera50b2->__construct($context, $logger, $frontLogger, $adminLogger);
    }

    public function & __get($name)
    {
        $this->initializer15995 && ($this->initializer15995->__invoke($valueHoldera50b2, $this, '__get', ['name' => $name], $this->initializer15995) || 1) && $this->valueHoldera50b2 = $valueHoldera50b2;

        if (isset(self::$publicProperties073e0[$name])) {
            return $this->valueHoldera50b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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

if (!\class_exists('Logger_fadf7f2', false)) {
    \class_alias(__NAMESPACE__.'\\Logger_fadf7f2', 'Logger_fadf7f2', false);
}
