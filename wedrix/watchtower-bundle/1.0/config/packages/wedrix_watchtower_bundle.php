<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('wedrix_watchtower', [
        'endpoint' => '/graphql.json',
        'schema_file' => '%kernel.project_dir%/config/watchtower/schema.graphql',
        'plugins_directory' => '%kernel.project_dir%/config/watchtower/plugins',
        'scalar_type_definitions_directory' => '%kernel.project_dir%/config/watchtower/scalar_type_definitions',
        'schema_cache_directory' => '%kernel.project_dir%/var/cache/watchtower/schema',
        'cache_schema' => false,
        'debug' => true,
        'context' => [
            'entity_manager' => 'doctrine.orm.entity_manager',
        ],
    ]);
    if ($containerConfigurator->env() === 'prod') {
        $containerConfigurator->extension('wedrix_watchtower', [
            'cache_schema' => true,
            'debug' => false,
        ]);
    }
};
