<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('lag_admin', [
        'application' => [
            'resources_path' => '%kernel.project_dir%/config/admin/resources',
        ],
    ]);
};
