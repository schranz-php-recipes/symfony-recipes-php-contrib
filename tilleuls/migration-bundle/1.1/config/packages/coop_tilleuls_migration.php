<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('coop_tilleuls_migration', [
        'legacy_connection_name' => 'legacy',
    ]);

    $containerConfigurator->extension('doctrine', [
        'dbal' => [
            'connections' => [
                'legacy' => [
                    'wrapper_class' => 'CoopTilleuls\MigrationBundle\Doctrine\DBAL\DisabledConnection',
                    'url' => '%env(LEGACY_DATABASE_URL)%',
                ],
            ],
        ],
    ]);
};
