<?php

namespace ContainerHBGT31Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\User\UserController' shared autowired service.
     *
     * @return \App\Controller\User\UserController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\User\\UserController'] = $instance = new \App\Controller\User\UserController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\User\\UserController', $container));

        return $instance;
    }
}
