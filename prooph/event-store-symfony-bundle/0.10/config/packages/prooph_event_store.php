<?php

declare(strict_types=1);

use Prooph\EventSourcing\EventStoreIntegration\AggregateTranslator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('prooph_event_store', [
        'stores' => [
            'default' => [
                'event_store' => 'app.event_store.default',
            ],
        ],
    ]);

    $services = $containerConfigurator->services();

    $services->defaults();

    $services->alias('Prooph\EventStore\EventStore', 'prooph_event_store.default');

    $services->set(AggregateTranslator::class);
};
