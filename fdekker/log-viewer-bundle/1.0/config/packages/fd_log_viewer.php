<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fd_log_viewer', [
        'log_files' => [
            'monolog' => [
                'type' => 'monolog',
                'name' => 'Monolog',
                'downloadable' => false,
                'deletable' => false,
            ],
        ],
        'hosts' => [
            'localhost' => [
                'name' => 'Local',
                'host' => null,
            ],
        ],
    ]);
};
