<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('opctim_csp_bundle', [
        'always_add' => [
        ],
        'report' => [
            'url' => null,
            'route' => null,
            'route_params' => [
            ],
            'chance' => 100,
        ],
        'directives' => [
            'default-src' => [
                '\'self\'',
                'data:',
                'https:',
            ],
            'base-uri' => [
                '\'self\'',
            ],
            'object-src' => [
                '\'none\'',
            ],
            'script-src' => [
                '\'self\'',
            ],
            'img-src' => [
                '\'self\'',
            ],
            'style-src' => [
                '\'self\'',
                '\'unsafe-inline\'',
            ],
        ],
    ]);
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('opctim_csp_bundle', [
            'directives' => null,
        ]);
    }
};
