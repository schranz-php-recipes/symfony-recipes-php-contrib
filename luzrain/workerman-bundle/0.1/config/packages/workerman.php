<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('workerman', [
        'servers' => [
            [
                'name' => 'Symfony webserver',
                'listen' => 'http://0.0.0.0:80',
                'processes' => 4,
            ],
        ],
        'reload_strategy' => [
            'exception' => [
                'active' => true,
            ],
            'file_monitor' => [
                'active' => true,
            ],
        ],
    ]);
};
