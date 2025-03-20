<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('lox24', [
        'api' => [
            'token' => '%env(LOX24_API_TOKEN)%',
            'http_client' => service('psr18.http_client'),
            'request_factory' => service('nyholm.psr7.psr17_factory'),
        ],
    ]);
};
