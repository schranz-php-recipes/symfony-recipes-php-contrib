<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('json_rpc_api', [
        'handlers' => [
            'auth' => [
                'path' => '/auth',
                'host' => null,
                'serializer' => null,
                'logger' => null,
                'annotation' => null,
            ],
            'main' => [
                'path' => '/api/v1',
                'host' => null,
                'serializer' => null,
                'logger' => null,
                'annotation' => null,
            ],
        ],
    ]);
};
