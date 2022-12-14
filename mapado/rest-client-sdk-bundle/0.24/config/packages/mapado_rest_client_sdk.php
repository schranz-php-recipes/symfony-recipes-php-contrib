<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mapado_rest_client_sdk', [
        'entity_managers' => [
            'foo' => [
                'server_url' => '%env(MAPADO_REST_CLIENT_SDK_SERVER_URL)%',
                'mappings' => [
                    'dir' => '%kernel.project_dir%/src/Entity/',
                ],
            ],
        ],
    ]);
};
