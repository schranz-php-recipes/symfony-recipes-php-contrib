<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@MonsieurBizSyliusMediaManagerPlugin/Resources/config/config.yaml');

    $containerConfigurator->extension('liip_imagine', [
        'loaders' => [
            'default' => [
                'filesystem' => [
                    'data_root' => [
                        '%sylius_core.public_dir%/media/image',
                        '%sylius_core.public_dir%/media',
                    ],
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('twig', [
        'form_themes' => [
            '@MonsieurBizSyliusMediaManagerPlugin/Admin/MediaManager/Form/_theme.html.twig',
        ],
    ]);
};
