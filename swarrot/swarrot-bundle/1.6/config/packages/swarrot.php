<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('swarrot', [
        'connections' => [
            'rabbitmq' => [
                'host' => '%env(RABBITMQ_HOST)%',
                'port' => '%env(int:RABBITMQ_PORT)%',
                'login' => '%env(RABBITMQ_LOGIN)%',
                'password' => '%env(RABBITMQ_PASSWORD)%',
                'vhost' => '/',
            ],
        ],
    ]);
};
