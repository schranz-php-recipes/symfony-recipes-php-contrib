<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('consul', [
        'service' => [
            'name' => '%env(resolve:CONSUL_SERVICE_NAME)%',
            'host' => '%env(resolve:CONSUL_SERVICE_HOST)%',
            'port' => '%env(resolve:CONSUL_SERVICE_PORT)%',
        ],
        'client' => [
            'base_uri' => '%env(resolve:CONSUL_CLIENT_BASE_URI)%',
        ],
    ]);
};
