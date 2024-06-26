<?php

namespace ContainerHBGT31Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QuHKGWService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.QuHKGW_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QuHKGW_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoriaRepository' => ['privates', 'App\\Repository\\CategoriaRepository', 'getCategoriaRepositoryService', true],
            'categorium' => ['privates', '.errored..service_locator.QuHKGW_.App\\Entity\\Categoria', NULL, 'Cannot autowire service ".service_locator.QuHKGW_": it references class "App\\Entity\\Categoria" but no such service exists.'],
        ], [
            'categoriaRepository' => 'App\\Repository\\CategoriaRepository',
            'categorium' => 'App\\Entity\\Categoria',
        ]);
    }
}
