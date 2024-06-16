<?php

namespace ContainerVMSiJA7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoriaControllerService extends App_KernelDewDebugContainer
{
    /**
     * Gets the public 'App\Controller\Categoria\CategoriaController' shared autowired service.
     *
     * @return \App\Controller\Categoria\CategoriaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Categoria/CategoriaController.php';

        $container->services['App\\Controller\\Categoria\\CategoriaController'] = $instance = new \App\Controller\Categoria\CategoriaController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Categoria\\CategoriaController', $container));

        return $instance;
    }
}