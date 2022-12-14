<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dtc_queue', [
        'default_manager' => 'odm',
        'record_timings' => false,
        'document_manager' => 'default',
        'entity_manager' => 'default',
        'priority_max' => 255,
        'priority_direction' => 'desc',
        'admin' => [
            'chartjs' => 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js',
        ],
    ]);
};
