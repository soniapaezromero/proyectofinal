<?php

namespace ContainerVMSiJA7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_PackageImagesService extends App_KernelDewDebugContainer
{
    /**
     * Gets the private 'assets._package_images' shared service.
     *
     * @return \Symfony\Component\Asset\PathPackage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php';

        return $container->privates['assets._package_images'] = new \Symfony\Component\Asset\PathPackage('images', ($container->privates['assets._version__default'] ?? ($container->privates['assets._version__default'] = new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy((\dirname(__DIR__, 4).'/public/build/manifest.json'), NULL, false))), ($container->privates['assets.context'] ?? $container->load('getAssets_ContextService')));
    }
}
