<?php

namespace ContainerHBGT31Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPedidoRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PedidoRepository' shared autowired service.
     *
     * @return \App\Repository\PedidoRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PedidoRepository'] = new \App\Repository\PedidoRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}