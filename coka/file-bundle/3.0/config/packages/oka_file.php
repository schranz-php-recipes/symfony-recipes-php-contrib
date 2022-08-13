<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('oka_file', [
        'db_driver' => 'orm',
        'storage' => [
            'root_path' => '%env(resolve:OKAFILE_STORAGE_ROOT_PATH)%',
            'webserver' => [
                'host' => '%env(resolve:OKAFILE_STORAGE_WEB_SERVER_HOST)%',
            ],
        ],
    ]);
};
