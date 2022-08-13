<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('oneup_flysystem', [
        'adapters' => [
            'default_adapter' => [
                'local' => [
                    'directory' => '%kernel.cache_dir%/flysystem',
                ],
            ],
        ],
        'filesystems' => [
            'default_filesystem' => [
                'adapter' => 'default_adapter',
                'alias' => 'League\Flysystem\Filesystem',
            ],
        ],
    ]);
};
