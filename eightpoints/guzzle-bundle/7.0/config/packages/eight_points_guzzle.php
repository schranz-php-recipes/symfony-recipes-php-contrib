<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('eight_points_guzzle', [
        'clients' => [
            'my_client' => [
                'options' => [
                    'timeout' => 30,
                    'http_errors' => true,
                    'headers' => [
                        'User-Agent' => 'EightPointsGuzzleBundle/v7',
                    ],
                ],
                'plugin' => null,
            ],
        ],
    ]);
};
