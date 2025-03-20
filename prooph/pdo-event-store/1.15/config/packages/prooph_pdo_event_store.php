<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults();

    $services->set('app.event_store.default', 'Prooph\EventStore\Pdo\PostgresEventStore')
        ->args([
            service('prooph_event_store.message_factory'),
            service('app.event_store.pdo_connection.postgres'),
            service('app.event_store.postgres.persistence_strategy'),
        ]);

    $services->set('app.event_store.pdo_connection.postgres', PDO::class)
        ->args([
            '%env(EVENT_STORE_DSN)%',
            '%env(EVENT_STORE_USER)%',
            '%env(EVENT_STORE_PASSWORD)%',
        ]);

    $services->set('app.event_store.postgres.persistence_strategy', 'Prooph\EventStore\Pdo\PersistenceStrategy\PostgresSingleStreamStrategy');
};
