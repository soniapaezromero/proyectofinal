<?php

namespace ContainerHBGT31Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductoControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Producto\ProductoController' shared autowired service.
     *
     * @return \App\Controller\Producto\ProductoController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Producto\\ProductoController'] = $instance = new \App\Controller\Producto\ProductoController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Producto\\ProductoController', $container));

        return $instance;
    }
}