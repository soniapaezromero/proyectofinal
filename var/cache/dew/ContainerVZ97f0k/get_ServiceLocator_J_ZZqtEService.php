<?php

namespace ContainerVZ97f0k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J_ZZqtEService extends App_KernelDewDebugContainer
{
    /**
     * Gets the private '.service_locator.j.zZqtE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j.zZqtE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'order' => ['privates', '.errored..service_locator.j.zZqtE.App\\Entity\\Order', NULL, 'Cannot autowire service ".service_locator.j.zZqtE": it references class "App\\Entity\\Order" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'order' => 'App\\Entity\\Order',
        ]);
    }
}
