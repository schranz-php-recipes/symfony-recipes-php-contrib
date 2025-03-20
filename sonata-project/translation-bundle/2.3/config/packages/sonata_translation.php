<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sonata_admin', [
        'assets' => [
            'extra_stylesheets' => [
                'bundles/sonatatranslation/css/sonata-translation.css',
            ],
        ],
    ]);

    $containerConfigurator->extension('sonata_block', [
        'blocks' => [
            'sonata_translation.block.locale_switcher' => null,
        ],
    ]);

    $containerConfigurator->extension('sonata_translation', [
        'locales' => [
            'en',
        ],
        'default_locale' => 'en',
    ]);
};
