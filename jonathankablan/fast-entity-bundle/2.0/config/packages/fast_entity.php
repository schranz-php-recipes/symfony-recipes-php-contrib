<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fast_entity', [
        'tables' => [
            [
                'name' => 'admin',
            ],
            [
                'name' => 'formation',
            ],
        ],
        'schema' => [
            [
                'entity' => 'admin',
                'property' => 'username',
                'type' => 'string',
                'length' => 255,
                'nullable' => true,
            ],
            [
                'entity' => 'admin',
                'property' => 'password',
                'type' => 'string',
                'length' => 255,
                'nullable' => true,
            ],
            [
                'entity' => 'admin',
                'property' => 'email',
                'type' => 'string',
                'length' => 255,
                'nullable' => true,
            ],
            [
                'entity' => 'admin',
                'property' => 'active',
                'type' => 'boolean',
                'nullable' => true,
            ],
            [
                'entity' => 'admin',
                'property' => 'created',
                'type' => 'datetime',
                'nullable' => true,
            ],
            [
                'entity' => 'admin',
                'property' => 'updated',
                'type' => 'datetime',
                'nullable' => true,
            ],
            [
                'entity' => 'formation',
                'property' => 'location',
                'type' => 'string',
                'length' => 255,
                'nullable' => true,
            ],
            [
                'entity' => 'formation',
                'property' => 'price',
                'type' => 'integer',
                'length' => 11,
                'nullable' => true,
            ],
            [
                'entity' => 'formation',
                'property' => 'created',
                'type' => 'datetime',
                'nullable' => true,
            ],
            [
                'entity' => 'formation',
                'property' => 'updated',
                'type' => 'datetime',
                'nullable' => true,
            ],
        ],
        'relations' => [
            [
                'entityTo' => 'admin',
                'entityFrom' => 'formation',
                'relation' => 'OneToOne',
            ],
        ],
    ]);
};
