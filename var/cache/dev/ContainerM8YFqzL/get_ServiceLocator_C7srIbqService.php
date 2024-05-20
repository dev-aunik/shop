<?php

namespace ContainerM8YFqzL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_C7srIbqService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.c7srIbq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.c7srIbq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CsvType' => ['privates', '.errored..service_locator.c7srIbq.Eccube\\Entity\\Master\\CsvType', NULL, 'Cannot autowire service ".service_locator.c7srIbq": it references class "Eccube\\Entity\\Master\\CsvType" but no such service exists.'],
        ], [
            'CsvType' => 'Eccube\\Entity\\Master\\CsvType',
        ]);
    }
}
