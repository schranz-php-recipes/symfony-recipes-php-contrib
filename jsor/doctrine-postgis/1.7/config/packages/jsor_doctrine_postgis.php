<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Jsor\Doctrine\PostGIS\Event\ORMSchemaEventSubscriber')
        ->tag('doctrine.event_subscriber', [
            'connection' => 'default',
        ]);

    $containerConfigurator->extension('doctrine', [
        'dbal' => [
            'mapping_types' => [
                '_text' => 'string',
            ],
            'types' => [
                'geometry' => 'Jsor\Doctrine\PostGIS\Types\GeometryType',
            ],
        ],
        'orm' => [
            'dql' => [
                'string_functions' => [
                    'ST_AsGeoJSON' => 'Jsor\Doctrine\PostGIS\Functions\ST_AsGeoJSON',
                    'ST_GeomFromGeoJSON' => 'Jsor\Doctrine\PostGIS\Functions\ST_GeomFromGeoJSON',
                ],
            ],
        ],
    ]);
};
