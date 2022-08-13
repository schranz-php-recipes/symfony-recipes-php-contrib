<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('prooph_service_bus', [
        'command_buses' => [
            'default_command_bus' => null,
        ],
        'event_buses' => [
            'default_event_bus' => null,
        ],
        'query_buses' => [
            'default_query_bus' => null,
        ],
    ]);

    $services = $containerConfigurator->services();

    $services->defaults();

    $services->alias('Prooph\ServiceBus\CommandBus', 'prooph_service_bus.default_command_bus');
};
