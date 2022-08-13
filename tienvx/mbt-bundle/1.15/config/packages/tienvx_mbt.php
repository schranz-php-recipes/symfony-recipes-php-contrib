<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('tienvx_mbt', [
        'email_from' => '%env(EMAIL_FROM)%',
        'admin_url' => '%env(ADMIN_URL)%',
    ]);

    $containerConfigurator->extension('flysystem', [
        'storages' => [
            'mbt.storage' => [
                'adapter' => 'local',
                'options' => [
                    'directory' => '%kernel.project_dir%/var/storage/screenshots',
                ],
            ],
        ],
    ]);
};
