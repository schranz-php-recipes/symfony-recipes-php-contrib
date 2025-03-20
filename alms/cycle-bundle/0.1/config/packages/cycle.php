<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('cycle', [
        'dbal' => [
            'databases' => [
                'default' => [
                    'connection' => 'default_connection',
                ],
            ],
            'connections' => [
                'default_connection' => [
                    'driver' => 'mysql',
                    'host' => '%env(resolve:DB_HOST)%',
                    'port' => '%env(int:DB_PORT)%',
                    'dbname' => '%env(resolve:DB_NAME)%',
                    'user' => '%env(resolve:DB_USER)%',
                    'password' => '%env(resolve:DB_PASSWORD)%',
                    'charset' => 'utf8',
                ],
            ],
        ],
        'orm' => [
            'schema' => [
                'type' => 'attribute',
                'dir' => '%kernel.project_dir%/src/Entity',
            ],
            'cache_dir' => '%kernel.cache_dir%/cycle',
            'relation' => [
                'fk_create' => false,
                'index_create' => false,
            ],
        ],
        'migration' => [
            'directory' => '%kernel.project_dir%/migrations',
        ],
    ]);
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('cycle', [
            'dbal' => [
                'connections' => [
                    'default_connection' => [
                        'dbname' => 'test_%env(resolve:DB_NAME)%',
                    ],
                ],
            ],
        ]);
    }
};
