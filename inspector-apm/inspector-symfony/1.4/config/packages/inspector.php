<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('inspector', [
        'ingestion_key' => '%env(INSPECTOR_INGESTION_KEY)%',
        'ignore_routes' => [
            '/_wdt*',
            '/_profiler*',
        ],
        'ignore_commands' => [
            'messenger*',
            'assets*',
            'importmap*',
            'cache*',
            'doctrine*',
            'schedule:run',
            'debug*',
            'make*',
        ],
    ]);
};
