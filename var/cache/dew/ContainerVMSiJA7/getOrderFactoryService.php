<?php

namespace ContainerVMSiJA7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderFactoryService extends App_KernelDewDebugContainer
{
    /**
     * Gets the private 'App\Factory\OrderFactory' shared autowired service.
     *
     * @return \App\Factory\OrderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Factory/OrderFactory.php';

        return $container->privates['App\\Factory\\OrderFactory'] = new \App\Factory\OrderFactory();
    }
}
