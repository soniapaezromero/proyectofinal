<?php

namespace ContainerHBGT31Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_MailerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'mailer.mailer' shared service.
     *
     * @return \Symfony\Component\Mailer\Mailer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['mailer.mailer'])) {
            return $container->privates['mailer.mailer'];
        }

        return $container->privates['mailer.mailer'] = new \Symfony\Component\Mailer\Mailer((new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['mailer.transport_factory.gmail'] ?? $container->load('getMailer_TransportFactory_GmailService'));
            yield 1 => ($container->privates['mailer.transport_factory.null'] ?? $container->load('getMailer_TransportFactory_NullService'));
            yield 2 => ($container->privates['mailer.transport_factory.sendmail'] ?? $container->load('getMailer_TransportFactory_SendmailService'));
            yield 3 => ($container->privates['mailer.transport_factory.native'] ?? $container->load('getMailer_TransportFactory_NativeService'));
            yield 4 => ($container->privates['mailer.transport_factory.smtp'] ?? $container->load('getMailer_TransportFactory_SmtpService'));
        }, 5)))->fromStrings(['main' => $container->getEnv('MAILER_DSN')]), NULL, $a);
    }
}
