<?php

namespace ContainerM8YFqzL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginApiServiceService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Service\PluginApiService' shared autowired service.
     *
     * @return \Eccube\Service\PluginApiService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PluginApiService.php';

        return $container->privates['Eccube\\Service\\PluginApiService'] = new \Eccube\Service\PluginApiService(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['Eccube\\Repository\\BaseInfoRepository'] ?? $container->getBaseInfoRepositoryService()), ($container->services['Eccube\\Repository\\PluginRepository'] ?? $container->getPluginRepositoryService()));
    }
}
