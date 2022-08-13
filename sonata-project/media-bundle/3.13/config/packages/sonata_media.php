<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sonata_media', [
        'default_context' => 'default',
        'contexts' => [
            'default' => [
                'providers' => ['sonata.media.provider.dailymotion', 'sonata.media.provider.youtube', 'sonata.media.provider.image', 'sonata.media.provider.file', 'sonata.media.provider.vimeo'],
                'formats' => [
                    'small' => [
                        'width' => 100,
                        'quality' => 70,
                    ],
                    'big' => [
                        'width' => 500,
                        'quality' => 70,
                    ],
                ],
            ],
        ],
        'cdn' => [
            'server' => [
                'path' => '/upload/media',
            ],
        ],
        'filesystem' => [
            'local' => [
                'directory' => '%kernel.project_dir%/public/upload/media',
                'create' => false,
            ],
        ],
    ]);
};
