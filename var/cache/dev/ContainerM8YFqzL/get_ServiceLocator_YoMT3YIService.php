<?php

namespace ContainerM8YFqzL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YoMT3YIService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yoMT3YI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yoMT3YI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cacheUtil' => ['privates', 'Eccube\\Util\\CacheUtil', 'getCacheUtilService', true],
            'systemService' => ['services', 'Eccube\\Service\\SystemService', 'getSystemServiceService', false],
        ], [
            'cacheUtil' => 'Eccube\\Util\\CacheUtil',
            'systemService' => 'Eccube\\Service\\SystemService',
        ]);
    }
}
