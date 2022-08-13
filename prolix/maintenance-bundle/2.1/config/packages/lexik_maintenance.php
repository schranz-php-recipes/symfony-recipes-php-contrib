<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('lexik_maintenance', [
        'driver' => [
            'class' => 'Lexik\Bundle\MaintenanceBundle\Drivers\FileDriver',
            'options' => [
                'file_path' => '%kernel.cache_dir%/lock',
            ],
        ],
    ]);
};
