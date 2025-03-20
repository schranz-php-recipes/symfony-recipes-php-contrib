<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('artprima_prometheus_metrics', [
        'namespace' => 'myapp',
        'type' => 'apcu',
        'ignored_routes' => [
            'prometheus_bundle_prometheus',
            '_wdt',
        ],
    ]);
};
