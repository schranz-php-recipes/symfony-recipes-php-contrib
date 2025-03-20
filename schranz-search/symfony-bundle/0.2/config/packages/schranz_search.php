<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('schranz_search', [
        'schemas' => [
            'default' => [
                'dir' => '%kernel.project_dir%/config/schemas',
            ],
        ],
        'engines' => [
            'default' => [
                'adapter' => '%env(SEAL_DSN)%',
            ],
        ],
    ]);
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('schranz_search', [
            'engines' => [
                'default' => [
                    'adapter' => 'memory://',
                ],
            ],
            'index_name_prefix' => 'test_',
        ]);
    }
};
