<?php

namespace ContainerHBGT31Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUser1TypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\User1Type' shared autowired service.
     *
     * @return \App\Form\User1Type
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\User1Type'] = new \App\Form\User1Type(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
