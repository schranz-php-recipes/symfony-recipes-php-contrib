<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@SfsMediaBundle/config/security/admin_role_hierarchy.yaml');

    $containerConfigurator->extension('sfs_media', [
        'driver' => 'filesystem',
        'filesystem' => [
            'path' => '%kernel.project_dir%/public/media',
            'url' => '/media',
        ],
        'media' => [
            'admin_controller' => true,
        ],
    ]);
};
