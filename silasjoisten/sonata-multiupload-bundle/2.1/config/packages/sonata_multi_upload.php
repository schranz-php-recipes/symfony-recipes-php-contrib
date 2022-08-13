<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sonata_admin', [
        'assets' => [
            'extra_stylesheets' => ['bundles/sonatamultiupload/dist/sonata-multiupload.css'],
            'extra_javascripts' => ['bundles/sonatamultiupload/dist/sonata-multiupload.js'],
        ],
    ]);
};
