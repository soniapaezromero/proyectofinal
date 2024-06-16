<?php

namespace ContainerVZ97f0k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClienteControllerService extends App_KernelDewDebugContainer
{
    /**
     * Gets the public 'App\Controller\Cliente\ClienteController' shared autowired service.
     *
     * @return \App\Controller\Cliente\ClienteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Cliente'.\DIRECTORY_SEPARATOR.'ClienteController.php';

        $container->services['App\\Controller\\Cliente\\ClienteController'] = $instance = new \App\Controller\Cliente\ClienteController(($container->privates['App\\Repository\\PedidoRepository'] ?? $container->load('getPedidoRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Cliente\\ClienteController', $container));

        return $instance;
    }
}