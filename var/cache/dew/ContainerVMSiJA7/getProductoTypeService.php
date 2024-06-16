<?php

namespace ContainerVMSiJA7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductoTypeService extends App_KernelDewDebugContainer
{
    /**
     * Gets the private 'App\Form\ProductoType' shared autowired service.
     *
     * @return \App\Form\ProductoType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProductoType.php';

        return $container->privates['App\\Form\\ProductoType'] = new \App\Form\ProductoType();
    }
}
