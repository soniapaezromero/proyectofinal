<?php

namespace ContainerVMSiJA7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultEntityManagerService extends App_KernelDewDebugContainer
{
    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/common/src/Proxy/Autoloader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Proxy/Autoloader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/EntityManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Mapping/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/MappingDriverChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Mapping/Driver/CompatibilityAnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/ColocatedMappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Mapping/Driver/ReflectionBasedDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Mapping/Driver/AnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/FileDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Mapping/Driver/XmlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Mapping/Driver/SimplifiedXmlDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Mapping/NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Mapping/UnderscoreNamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Mapping/QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Internal/SQLResultCasing.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Mapping/DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Mapping/EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Mapping/EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Mapping/ContainerEntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Repository/RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/RepositoryFactoryCompatibility.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/Repository/ContainerRepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/src/ManagerConfigurator.php';

        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->load('getDoctrine_Dbal_DefaultConnectionService'));

        if (isset($container->services['doctrine.orm.default_entity_manager'])) {
            return $container->services['doctrine.orm.default_entity_manager'];
        }
        $b = ($container->privates['doctrine.dbal.default_connection.event_manager'] ?? $container->load('getDoctrine_Dbal_DefaultConnection_EventManagerService'));

        if (isset($container->services['doctrine.orm.default_entity_manager'])) {
            return $container->services['doctrine.orm.default_entity_manager'];
        }
        $c = new \Doctrine\ORM\Configuration();

        $d = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $e = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver([(\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/config/doctrine') => 'Vich\\UploaderBundle\\Entity'], '.orm.xml', false);
        $e->setGlobalBasename('mapping');

        $d->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity')], false), 'App\\Entity');
        $d->addDriver($e, 'Vich\\UploaderBundle\\Entity');

        $c->setEntityNamespaces(['App' => 'App\\Entity', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\Entity']);
        $c->setMetadataCache(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
        $c->setQueryCache(($container->privates['cache.doctrine.orm.default.query'] ?? ($container->privates['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
        $c->setResultCache(($container->privates['cache.doctrine.orm.default.result'] ?? ($container->privates['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));
        $c->setMetadataDriverImpl(new \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver($d, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.ulid_generator' => ['privates', 'doctrine.ulid_generator', 'getDoctrine_UlidGeneratorService', true],
            'doctrine.uuid_generator' => ['privates', 'doctrine.uuid_generator', 'getDoctrine_UuidGeneratorService', true],
        ], [
            'doctrine.ulid_generator' => '?',
            'doctrine.uuid_generator' => '?',
        ])));
        $c->setProxyDir(($container->targetDir.''.'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(true);
        $c->setSchemaIgnoreClasses([]);
        $c->setClassMetadataFactoryName('Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $c->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($container));
        $c->setLazyGhostObjectEnabled(false);
        $c->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Repository\\CategoriaRepository' => ['privates', 'App\\Repository\\CategoriaRepository', 'getCategoriaRepositoryService', true],
            'App\\Repository\\ClienteRepository' => ['privates', 'App\\Repository\\ClienteRepository', 'getClienteRepositoryService', true],
            'App\\Repository\\ConsultaRepository' => ['privates', 'App\\Repository\\ConsultaRepository', 'getConsultaRepositoryService', true],
            'App\\Repository\\EstadoRepository' => ['privates', 'App\\Repository\\EstadoRepository', 'getEstadoRepositoryService', true],
            'App\\Repository\\NovedadesRepository' => ['privates', 'App\\Repository\\NovedadesRepository', 'getNovedadesRepositoryService', true],
            'App\\Repository\\OrderItemRepository' => ['privates', 'App\\Repository\\OrderItemRepository', 'getOrderItemRepositoryService', true],
            'App\\Repository\\OrderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'App\\Repository\\PedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
            'App\\Repository\\ProductoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
            'App\\Repository\\RoleRepository' => ['privates', 'App\\Repository\\RoleRepository', 'getRoleRepositoryService', true],
            'App\\Repository\\StockRepository' => ['privates', 'App\\Repository\\StockRepository', 'getStockRepositoryService', true],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'App\\Repository\\CategoriaRepository' => '?',
            'App\\Repository\\ClienteRepository' => '?',
            'App\\Repository\\ConsultaRepository' => '?',
            'App\\Repository\\EstadoRepository' => '?',
            'App\\Repository\\NovedadesRepository' => '?',
            'App\\Repository\\OrderItemRepository' => '?',
            'App\\Repository\\OrderRepository' => '?',
            'App\\Repository\\PedidoRepository' => '?',
            'App\\Repository\\ProductoRepository' => '?',
            'App\\Repository\\RoleRepository' => '?',
            'App\\Repository\\StockRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ])));

        $container->services['doctrine.orm.default_entity_manager'] = $instance = new \Doctrine\ORM\EntityManager($a, $c, $b);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }
}
