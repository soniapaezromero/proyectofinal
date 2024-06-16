<?php

namespace ContainerHBGT31Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Listener_Clean_ProductsService extends App_KernelProdContainer
{
    /*
     * Gets the private 'vich_uploader.listener.clean.products' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\CleanListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService'));

        if (isset($container->privates['vich_uploader.listener.clean.products'])) {
            return $container->privates['vich_uploader.listener.clean.products'];
        }

        return $container->privates['vich_uploader.listener.clean.products'] = new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('products', ($container->privates['vich_uploader.adapter.orm'] ?? ($container->privates['vich_uploader.adapter.orm'] = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter())), ($container->privates['vich_uploader.metadata_reader'] ?? $container->load('getVichUploader_MetadataReaderService')), $a);
    }
}