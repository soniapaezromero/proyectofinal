<?php

namespace ContainerHBGT31Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCheckVerifiedUserSubscriberService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\EventSubscriber\CheckVerifiedUserSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\CheckVerifiedUserSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\EventSubscriber\\CheckVerifiedUserSubscriber'] = new \App\EventSubscriber\CheckVerifiedUserSubscriber(($container->services['router'] ?? $container->getRouterService()));
    }
}
