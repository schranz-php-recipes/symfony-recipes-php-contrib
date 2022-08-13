<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('old_sound_rabbit_mq', [
        'connections' => [
            'default' => [
                'url' => '%env(RABBITMQ_URL)%',
                'vhost' => '%env(RABBITMQ_VHOST)%',
                'lazy' => true,
                'connection_timeout' => 3,
                'read_write_timeout' => 3,
                'keepalive' => false,
                'heartbeat' => 0,
                'use_socket' => false,
            ],
        ],
    ]);
};
