<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('overblog_graphql', [
        'definitions' => [
            'schema' => [
                'query' => 'Query',
            ],
            'mappings' => [
                'types' => [
                    [
                        'type' => 'yaml',
                        'dir' => '%kernel.project_dir%/config/graphql/types',
                        'suffix' => null,
                    ],
                ],
            ],
        ],
    ]);
};
