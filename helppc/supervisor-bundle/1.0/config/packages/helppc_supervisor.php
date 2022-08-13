<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('supervisor', [
        'default_environment' => 'all',
        'servers' => [
            'all' => [
                'localhost' => [
                    'scheme' => 'http',
                    'host' => '127.0.0.1',
                    'port' => 9001,
                ],
            ],
        ],
    ]);
};
