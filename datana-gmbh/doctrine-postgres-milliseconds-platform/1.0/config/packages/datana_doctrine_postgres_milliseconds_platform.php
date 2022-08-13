<?php

declare(strict_types=1);

use Datana\Doctrine\Postgres\Platform\Doctrine\DBAL\Platforms\PostgreSQLMillisecondsPlatform;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set(PostgreSQLMillisecondsPlatform::class);

    $containerConfigurator->extension('doctrine', [
        'dbal' => [
            'platform_service' => 'Datana\Doctrine\Postgres\Platform\Doctrine\DBAL\Platforms\PostgreSQLMillisecondsPlatform',
        ],
    ]);
};
