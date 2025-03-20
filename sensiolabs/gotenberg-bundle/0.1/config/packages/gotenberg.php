<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('framework', [
        'http_client' => [
            'scoped_clients' => [
                'gotenberg.client' => [
                    'base_uri' => '%env(GOTENBERG_DSN)%',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sensiolabs_gotenberg', [
        'http_client' => 'gotenberg.client',
    ]);
};
