<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('jmose_command_scheduler', [
        'log_path' => '%kernel.logs_dir%',
        'excluded_command_namespaces' => [
            '_global',
            'scheduler',
            'server',
            'container',
            'config',
            'generate',
            'init',
            'router',
            'doctrine',
            'debug',
        ],
    ]);
};
