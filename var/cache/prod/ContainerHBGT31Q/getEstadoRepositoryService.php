<?php

namespace ContainerHBGT31Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEstadoRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\EstadoRepository' shared autowired service.
     *
     * @return \App\Repository\EstadoRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\EstadoRepository'] = new \App\Repository\EstadoRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}