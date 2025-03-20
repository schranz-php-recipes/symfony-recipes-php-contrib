<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults();

    $services->alias('Prooph\EventStore\EventStore', 'app.event_store.default');

    $services->set('app.event_store.default', 'Prooph\EventStore\Pdo\MySqlEventStore')
        ->args([
            service('prooph_event_store.message_factory'),
            service('app.event_store.pdo_connection.mysql'),
            service('app.event_store.mysql.persistence_strategy'),
        ]);

    $services->set('app.event_store.pdo_connection.mysql', PDO::class)
        ->args([
            '%env(MYSQL_DSN)%',
            '%env(MYSQL_USER)%',
            '%env(MYSQL_PASSWORD)%',
        ]);

    $services->set('app.event_store.mysql.persistence_strategy', 'Prooph\EventStore\Pdo\PersistenceStrategy\MySqlSingleStreamStrategy');
};
