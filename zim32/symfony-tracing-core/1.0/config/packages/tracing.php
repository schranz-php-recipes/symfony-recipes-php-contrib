<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('tracing', [
        'tracers' => [
            'default' => null,
        ],
        'span_sampler' => [
            'always_on' => null,
        ],
        'exporter' => [
            'log' => [
                'service_name' => 'tracing',
                'level' => 'debug',
            ],
        ],
    ]);
};
