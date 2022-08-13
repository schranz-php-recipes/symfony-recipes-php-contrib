<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('nav', [
        'enable_profiler' => '%kernel.debug%',
        'url' => '%env(NAV_URL)%',
        'paths' => [
            'App' => [
                'path' => '%kernel.project_dir%/src/Entity',
                'namespace' => 'App/Entity',
            ],
        ],
    ]);
};
