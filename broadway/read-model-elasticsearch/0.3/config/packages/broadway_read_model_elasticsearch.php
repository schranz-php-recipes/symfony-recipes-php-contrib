<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('broadway', [
        'read_model' => 'broadway.read_model.elasticsearch.repository_factory',
    ]);

    $services = $containerConfigurator->services();

    $services->set('broadway.elasticsearch.client_factory', 'Broadway\ReadModel\ElasticSearch\ElasticSearchClientFactory');

    $services->set('broadway.read_model.elasticsearch.repository_factory', 'Broadway\ReadModel\ElasticSearch\ElasticSearchRepositoryFactory')
        ->args([service('broadway.elasticsearch.client'), service('broadway.serializer.readmodel')]);

    $services->set('broadway.elasticsearch.client', 'Elasticsearch\Client')
        ->factory([service('broadway.elasticsearch.client_factory'), 'create'])
        ->args(['%elasticsearch%']);
};
