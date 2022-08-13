<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fm_elfinder', [
        'instances' => [
            'default' => [
                'include_assets' => true,
                'relative_path' => true,
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
