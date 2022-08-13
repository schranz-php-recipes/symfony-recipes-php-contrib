<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('wouterj_eloquent', [
        'driver' => '%env(DB_CONNECTION)%',
        'host' => '%env(DB_HOST)%',
        'port' => '%env(DB_PORT)%',
        'database' => '%env(DB_DATABASE)%',
        'username' => '%env(DB_USERNAME)%',
        'password' => '%env(DB_PASSWORD)%',
    ]);
};
