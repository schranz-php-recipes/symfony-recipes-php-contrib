<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('html_sanitizer', [
        'default_sanitizer' => 'default',
        'sanitizers' => [
            'default' => [
                'extensions' => [
                    'basic',
                ],
            ],
        ],
    ]);
};
