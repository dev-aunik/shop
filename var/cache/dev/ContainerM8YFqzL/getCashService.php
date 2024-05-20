<?php

namespace ContainerM8YFqzL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCashService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the public 'Eccube\Service\Payment\Method\Cash' shared autowired service.
     *
     * @return \Eccube\Service\Payment\Method\Cash
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Payment'.\DIRECTORY_SEPARATOR.'PaymentMethodInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Payment'.\DIRECTORY_SEPARATOR.'Method'.\DIRECTORY_SEPARATOR.'Cash.php';

        return $container->services['Eccube\\Service\\Payment\\Method\\Cash'] = new \Eccube\Service\Payment\Method\Cash(($container->privates['eccube.purchase.flow.shopping'] ?? $container->load('getEccube_Purchase_Flow_ShoppingService')));
    }
}
