<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dtc_queue', [
        'manager' => [
            'job' => 'odm',
        ],
        'timings' => [
            'record' => false,
        ],
        'odm' => [
            'document_manager' => 'default',
        ],
        'priority' => [
            'max' => 255,
            'direction' => 'desc',
        ],
        'admin' => [
            'chartjs' => 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js',
        ],
    ]);
};
