<?php

declare(strict_types=1);

use Softspring\Component\DoctrineMigrationsVersionComparator\VersionNumberComparator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(VersionNumberComparator::class);

    $containerConfigurator->extension('doctrine_migrations', [
        'services' => [
            'Doctrine\Migrations\Version\Comparator' => 'Softspring\Component\DoctrineMigrationsVersionComparator\VersionNumberComparator',
        ],
    ]);
};
