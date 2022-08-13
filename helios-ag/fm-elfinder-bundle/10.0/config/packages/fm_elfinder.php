<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fm_elfinder', [
        'instances' => [
            'default' => [
                'connector' => [
                    'roots' => [
                        'uploads' => [
                            'driver' => 'LocalFileSystem',
                            'path' => 'uploads',
                        ],
                    ],
                ],
            ],
        ],
    ]);
};
