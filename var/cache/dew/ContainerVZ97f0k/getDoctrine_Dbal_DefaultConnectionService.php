<?php

namespace ContainerVZ97f0k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnectionService extends App_KernelDewDebugContainer
{
    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Connection.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ConnectionFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Configuration.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Schema'.\DIRECTORY_SEPARATOR.'SchemaManagerFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Schema'.\DIRECTORY_SEPARATOR.'LegacySchemaManagerFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Driver'.\DIRECTORY_SEPARATOR.'Middleware.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'ConnectionNameAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'DebugMiddleware.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'DsnParser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'Debug'.\DIRECTORY_SEPARATOR.'DebugDataHolder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Middleware'.\DIRECTORY_SEPARATOR.'BacktraceDebugDataHolder.php';

        $a = ($container->privates['doctrine.dbal.default_connection.event_manager'] ?? $container->load('getDoctrine_Dbal_DefaultConnection_EventManagerService'));

        if (isset($container->services['doctrine.dbal.default_connection'])) {
            return $container->services['doctrine.dbal.default_connection'];
        }
        $b = new \Doctrine\DBAL\Configuration();

        $c = new \Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware(($container->privates['doctrine.debug_data_holder'] ?? ($container->privates['doctrine.debug_data_holder'] = new \Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder([]))), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
        $c->setConnectionName('default');

        $b->setSchemaManagerFactory(new \Doctrine\DBAL\Schema\LegacySchemaManagerFactory());
        $b->setMiddlewares([0 => $c]);

        return $container->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([], new \Doctrine\DBAL\Tools\DsnParser(['db2' => 'ibm_db2', 'mssql' => 'pdo_sqlsrv', 'mysql' => 'pdo_mysql', 'mysql2' => 'pdo_mysql', 'postgres' => 'pdo_pgsql', 'postgresql' => 'pdo_pgsql', 'pgsql' => 'pdo_pgsql', 'sqlite' => 'pdo_sqlite', 'sqlite3' => 'pdo_sqlite'])))->createConnection(['url' => $container->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], $b, $a, []);
    }
}
