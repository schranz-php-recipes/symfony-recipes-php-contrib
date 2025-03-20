<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('tracing', [
        'tracers' => [
            'http' => null,
        ],
    ]);

    $containerConfigurator->extension('http_client_tracing', [
        'decorated_services' => [
            [
                'service' => 'http_client',
                'propagate' => false,
                'eager_content' => true,
            ],
        ],
    ]);
};
