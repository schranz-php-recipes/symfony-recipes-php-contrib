<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('supervisor_rest', [
        'default_environment' => 'dev',
        'servers' => [
            'dev' => [
                'application' => [
                    'scheme' => 'http',
                    'host' => 'localhost',
                    'port' => 9006,
                ],
            ],
        ],
    ]);
};
