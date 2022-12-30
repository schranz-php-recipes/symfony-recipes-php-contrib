<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('longitude_one_meta', [
        'defaults' => [
            'description' => '',
            'title' => '',
            'og:image' => 'Feel free to add any tag and get their contents with meta(\'og:image\') function or a filter: \'og:image\'',
        ],
        'paths' => [
            '/any-path' => [
                'description' => 'A custom description for http://my_app/any-path',
                'title' => 'A custom title for http://my_app/any-path',
            ],
        ],
    ]);
};
