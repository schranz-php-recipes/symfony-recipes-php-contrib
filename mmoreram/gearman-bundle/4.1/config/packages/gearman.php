<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('doctrine_cache', [
        'providers' => [
            'gearman_cache' => [
                'type' => 'file_system',
                'namespace' => 'doctrine_cache.ns.gearman',
            ],
        ],
    ]);

    $containerConfigurator->extension('gearman', [
        'servers' => [
            'localhost' => [
                'host' => '127.0.0.1',
                'port' => 4730,
            ],
        ],
    ]);
};
