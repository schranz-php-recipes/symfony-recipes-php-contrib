<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fsi_files', [
        'default_entity_filesystem' => null,
        'url_adapters' => [
        ],
        'entities' => [
        ],
    ]);
};
