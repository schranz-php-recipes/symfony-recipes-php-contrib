<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('nelmio_api_doc', [
        'documentation' => [
            'info' => [
                'title' => 'My App',
                'description' => 'This is an awesome app!',
                'version' => '1.0.0',
            ],
        ],
        'areas' => [
            'path_patterns' => [
                '^/api(?!/doc$)',
            ],
        ],
    ]);
};
