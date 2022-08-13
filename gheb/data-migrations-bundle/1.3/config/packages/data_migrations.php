<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('data_migrations', [
        'dir_name' => '%kernel.project_dir%/src/DataMigrations',
        'namespace' => 'DataMigrations',
        'name' => 'My app migrations',
    ]);
};
