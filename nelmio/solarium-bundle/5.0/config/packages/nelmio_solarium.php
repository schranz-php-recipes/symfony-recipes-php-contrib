<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('nelmio_solarium', [
        'endpoints' => [
            'default' => [
                'host' => '%env(SOLR_HOST)%',
                'core' => '%env(SOLR_CORE)%',
            ],
        ],
        'clients' => [
            'default' => [
                'endpoints' => [
                    'default',
                ],
            ],
        ],
    ]);
};
