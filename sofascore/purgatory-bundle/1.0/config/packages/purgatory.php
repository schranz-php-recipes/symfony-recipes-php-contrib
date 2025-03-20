<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('purgatory', [
        'route_ignore_patterns' => [
            '/^_profiler/',
            '/^_wdt/',
        ],
        'purger' => [
            'name' => 'symfony',
        ],
    ]);
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('purgatory', [
            'purger' => 'void',
        ]);
    }
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('purgatory', [
            'purger' => 'in-memory',
            'profiler_integration' => false,
        ]);
    }
};
