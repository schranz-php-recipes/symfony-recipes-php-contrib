<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fos_elastica', [
        'clients' => [
            'default' => [
                'url' => '%env(ELASTICSEARCH_URL)%',
            ],
        ],
        'indexes' => [
            'app' => null,
        ],
    ]);
};
