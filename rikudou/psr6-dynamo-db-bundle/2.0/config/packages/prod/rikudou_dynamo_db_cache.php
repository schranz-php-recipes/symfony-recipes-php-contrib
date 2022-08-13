<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('rikudou_dynamo_db_cache', [
        'table' => '%env(DYNAMODB_CACHE_TABLE)%',
        'replace_default_adapter' => true,
        'client_config' => [
            'region' => '%env(AWS_REGION)%',
        ],
    ]);
};
