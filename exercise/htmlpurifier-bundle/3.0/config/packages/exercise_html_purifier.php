<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('exercise_html_purifier', [
        'default_cache_serializer_path' => '%kernel.cache_dir%/htmlpurifier',
        'html_profiles' => [
            'default' => [
                'config' => [
                    'Core.Encoding' => 'UTF-8',
                ],
            ],
        ],
    ]);
};
