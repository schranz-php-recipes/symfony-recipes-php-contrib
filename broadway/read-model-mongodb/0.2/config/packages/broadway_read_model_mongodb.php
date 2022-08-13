<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('broadway', [
        'read_model' => 'broadway.read_model.mongodb.repository_factory',
    ]);

    $services = $containerConfigurator->services();

    $services->set('broadway.read_model.mongodb_client', 'MongoDB\Client')
        ->args(['%mongodb_uri%']);

    $services->set('broadway.read_model.mongodb_collection', 'MongoDB\Collection')
        ->factory([service('broadway.read_model.mongodb_client'), 'selectCollection'])
        ->args(['%mongodb_database%', 'read_models']);

    $services->set('broadway.read_model.mongodb.repository_factory', 'Broadway\ReadModel\MongoDB\MongoDBRepositoryFactory')
        ->args([service('broadway.read_model.mongodb_collection'), service('broadway.serializer.readmodel')]);
};
