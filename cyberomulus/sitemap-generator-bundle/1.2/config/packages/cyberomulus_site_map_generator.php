<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('cyberomulus_site_map_generator', [
        'defaults_values' => [
            'url' => [
                'last_modification_now' => true,
            ],
        ],
    ]);
};
