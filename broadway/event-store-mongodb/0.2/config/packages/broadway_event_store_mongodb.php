<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('broadway', [
        'event_store' => 'broadway.event_store.mongodb',
    ]);

    $services = $containerConfigurator->services();

    $services->set('broadway.event_store.mongodb_client', 'MongoDB\Client')
        ->args([
            '%mongodb_uri%',
        ]);

    $services->set('broadway.event_store.mongodb_collection', 'MongoDB\Collection')
        ->factory([
            service('broadway.event_store.mongodb_client'),
            'selectCollection',
        ])
        ->args([
            '%mongodb_database%',
            'events',
        ]);

    $services->set('broadway.event_store.mongodb', 'Broadway\EventStore\MongoDB\MongoDBEventStore')
        ->args([
            service('broadway.event_store.mongodb_collection'),
            service('broadway.serializer.payload'),
            service('broadway.serializer.metadata'),
        ]);
};
