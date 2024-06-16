<?php

namespace ContainerVMSiJA7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BEGBB2Service extends App_KernelDewDebugContainer
{
    /**
     * Gets the private '.service_locator.bEG_bB2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bEG_bB2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'novedade' => ['privates', '.errored..service_locator.bEG_bB2.App\\Entity\\Novedades', NULL, 'Cannot autowire service ".service_locator.bEG_bB2": it references class "App\\Entity\\Novedades" but no such service exists.'],
            'novedadesRepository' => ['privates', 'App\\Repository\\NovedadesRepository', 'getNovedadesRepositoryService', true],
        ], [
            'novedade' => 'App\\Entity\\Novedades',
            'novedadesRepository' => 'App\\Repository\\NovedadesRepository',
        ]);
    }
}
