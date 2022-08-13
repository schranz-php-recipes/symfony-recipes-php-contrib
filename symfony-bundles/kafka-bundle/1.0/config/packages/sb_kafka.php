<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sb_kafka', [
        'producers' => [
            'configuration' => [
                'group.id' => 'main_group',
                'log.connection.close' => 'false',
                'metadata.broker.list' => '%env(resolve:KAFKA_BROKERS)%',
                'queue.buffering.max.messages' => 10000000,
            ],
        ],
        'consumers' => [
            'configuration' => [
                'group.id' => 'main_group',
                'log.connection.close' => 'false',
                'metadata.broker.list' => '%env(resolve:KAFKA_BROKERS)%',
            ],
        ],
    ]);
};
