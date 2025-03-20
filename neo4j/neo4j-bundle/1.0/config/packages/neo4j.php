<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('neo4j', [
        'drivers' => [
            'default' => [
                'dsn' => '%env(resolve:NEO4J_DEFAULT_CONNECTION_DSN)%',
            ],
        ],
    ]);
};
