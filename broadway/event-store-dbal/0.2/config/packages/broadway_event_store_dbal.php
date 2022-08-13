<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('broadway', [
        'event_store' => 'broadway.event_store.dbal',
    ]);

    $services = $containerConfigurator->services();

    $services->set('broadway.event_store.dbal', 'Broadway\EventStore\Dbal\DBALEventStore')
        ->args([service('doctrine.dbal.default_connection'), service('broadway.serializer.payload'), service('broadway.serializer.metadata'), 'events', false, service('broadway.uuid.converter')]);
};
