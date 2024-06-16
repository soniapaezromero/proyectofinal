<?php

namespace ContainerVMSiJA7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I2YZ1nService extends App_KernelDewDebugContainer
{
    /**
     * Gets the private '.service_locator._i2YZ1n' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._i2YZ1n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'producto' => ['privates', '.errored..service_locator._i2YZ1n.App\\Entity\\Producto', NULL, 'Cannot autowire service ".service_locator._i2YZ1n": it references class "App\\Entity\\Producto" but no such service exists.'],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
        ], [
            'producto' => 'App\\Entity\\Producto',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
        ]);
    }
}
