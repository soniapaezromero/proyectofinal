<?php

namespace ContainerVMSiJA7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FWfeBs9Service extends App_KernelDewDebugContainer
{
    /**
     * Gets the private '.service_locator.FWfeBs9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FWfeBs9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cliente' => ['privates', '.errored..service_locator.FWfeBs9.App\\Entity\\Cliente', NULL, 'Cannot autowire service ".service_locator.FWfeBs9": it references class "App\\Entity\\Cliente" but no such service exists.'],
        ], [
            'cliente' => 'App\\Entity\\Cliente',
        ]);
    }
}
