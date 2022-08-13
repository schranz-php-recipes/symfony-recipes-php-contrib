<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('broadway', [
        'event_store' => 'broadway.event_store.in_memory',
        'read_model' => 'broadway.read_model.in_memory.repository_factory',
        'serializer' => [
            'payload' => 'broadway.simple_interface_serializer',
            'readmodel' => 'broadway.simple_interface_serializer',
            'metadata' => 'broadway.simple_interface_serializer',
        ],
        'command_handling' => [
            'dispatch_events' => false,
            'logger' => null,
        ],
        'saga' => [
            'enabled' => false,
            'state_repository' => 'broadway.saga.state.in_memory_repository',
        ],
    ]);
};
