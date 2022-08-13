<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('amqp_handler', [
        'connection' => '%env(JURRY_RABBIT_MQ_DSN)%',
        'queues_properties' => [
            'sync_queue' => [
                'name' => 'stores_sync',
                'message_ttl' => 10000,
            ],
            'async_queue' => [
                'name' => 'stores_async',
                'message_ttl' => 10000,
            ],
        ],
    ]);
};
