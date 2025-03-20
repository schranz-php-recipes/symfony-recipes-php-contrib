<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('artprima_prometheus_metrics', [
        'namespace' => 'myapp',
        'storage' => '%env(PROM_METRICS_DSN)%',
        'ignored_routes' => [
            'prometheus_bundle_prometheus',
            '_wdt',
        ],
        'disable_default_promphp_metrics' => true,
    ]);
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('artprima_prometheus_metrics', [
            'storage' => 'in_memory',
        ]);
    }
};
