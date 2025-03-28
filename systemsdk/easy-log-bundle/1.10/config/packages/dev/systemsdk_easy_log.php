<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('easy_log', [
        'log_path' => '%kernel.logs_dir%/%kernel.environment%-readable.log',
        'ignored_routes' => [
            '_wdt',
            '_profiler',
        ],
    ]);
};
