<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('bm_backup_manager', [
        'database' => [
            'development' => [
                'dsn' => '%env(resolve:DATABASE_URL)%',
            ],
        ],
        'storage' => [
            'local' => [
                'type' => 'Local',
                'root' => '%kernel.cache_dir%/db',
            ],
        ],
    ]);
};
