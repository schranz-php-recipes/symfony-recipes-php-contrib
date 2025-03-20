<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('lexik_cron_file_generator', [
        'env_available' => [
            'staging',
        ],
        'user' => [
            'staging' => 'project_staging',
        ],
        'php_version' => 'php7.2',
        'absolute_path' => [
            'staging' => 'project_dir/bin/console',
        ],
        'output_path' => '%kernel.cache_dir%/cron_test',
    ]);
};
