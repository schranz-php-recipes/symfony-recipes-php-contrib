<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dtc_grid', [
        'purl' => 'https://cdnjs.cloudflare.com/ajax/libs/purl/2.3.1/purl.min.js',
        'jquery' => [
            'url' => 'https://code.jquery.com/jquery-3.3.1.min.js',
            'integrity' => 'sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=',
            'crossorigin' => 'anonymous',
        ],
        'datatables' => [
            'css' => [
                'https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
            ],
            'js' => [
                'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                'https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
            ],
        ],
        'theme' => [
            'css' => [
                'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
                'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css',
            ],
            'js' => [
                'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
                'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js',
            ],
        ],
        'page_div_style' => 'margin: 10px',
    ]);
};
