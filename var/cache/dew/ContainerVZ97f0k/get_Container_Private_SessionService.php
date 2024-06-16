<?php

namespace ContainerVZ97f0k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_SessionService extends App_KernelDewDebugContainer
{
    /**
     * Gets the public '.container.private.session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'SessionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'Session'.\DIRECTORY_SEPARATOR.'Session.php';

        $a = ($container->privates['session.factory'] ?? $container->load('getSession_FactoryService'));

        if (isset($container->services['.container.private.session'])) {
            return $container->services['.container.private.session'];
        }

        return $container->services['.container.private.session'] = $a->createSession();
    }
}