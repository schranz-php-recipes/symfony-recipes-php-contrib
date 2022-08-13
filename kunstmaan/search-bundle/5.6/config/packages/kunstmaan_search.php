<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('kunstmaan_search', [
        'connection' => [
            'driver' => 'elastic_search',
            'host' => 'localhost',
            'port' => 9200,
        ],
        'index_prefix' => 'myproject',
    ]);
};
