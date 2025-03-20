<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('oka_api', [
        'cors' => [
            'default' => [
                'allow_credentials' => true,
                'expose_headers' => [
                    'Accept-Encoding',
                ],
                'max_age' => 3600,
            ],
        ],
    ]);
};
