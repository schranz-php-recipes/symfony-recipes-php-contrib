<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('datatable', [
        'language_from_cdn' => false,
        'language' => 'English',
        'template_parameters' => [
            'style' => 'bootstrap5',
            'className' => 'table table-bordered',
        ],
    ]);
};
