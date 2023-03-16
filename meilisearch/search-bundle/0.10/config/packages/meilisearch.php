<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('meilisearch', [
        'url' => '%env(MEILISEARCH_URL)%',
        'api_key' => '%env(MEILISEARCH_API_KEY)%',
        'prefix' => '%env(MEILISEARCH_PREFIX)%',
        'indices' => null,
    ]);
};
