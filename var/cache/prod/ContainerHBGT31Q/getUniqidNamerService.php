<?php

namespace ContainerHBGT31Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUniqidNamerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Vich\\UploaderBundle\\Naming\\UniqidNamer'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }
}
