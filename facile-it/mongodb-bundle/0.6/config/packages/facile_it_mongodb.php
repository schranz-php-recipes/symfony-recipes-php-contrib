<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mongo_db_bundle', [
        'data_collection' => '%kernel.debug%',
        'clients' => [
            'default' => [
                'hosts' => [
                    [
                        'host' => '%env(MONGODB_HOST)%',
                        'port' => '%env(int:MONGODB_PORT)%',
                    ],
                ],
                'username' => '%env(MONGODB_USER)%',
                'password' => '%env(MONGODB_PASSWORD)%',
                'replicaSet' => '',
                'ssl' => false,
                'connectTimeoutMS' => 3000,
                'readPreference' => 'primaryPreferred',
            ],
        ],
        'connections' => [
            'default' => [
                'client_name' => 'default',
                'database_name' => '%env(MONGODB_DB)%',
            ],
        ],
    ]);
};
