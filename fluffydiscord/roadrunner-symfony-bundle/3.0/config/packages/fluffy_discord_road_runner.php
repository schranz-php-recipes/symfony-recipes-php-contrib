<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fluffy_discord_road_runner', [
        'rr_config_path' => '.rr.yaml',
        'http' => [
            'lazy_boot' => false,
            'early_router_initialization' => true,
        ],
        'centrifugo' => [
            'lazy_boot' => false,
        ],
        'kv' => [
            'auto_register' => true,
            'serializer' => null,
            'keypair_path' => 'bin/keypair.key',
        ],
    ]);
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('fluffy_discord_road_runner', [
            'http' => [
                'early_router_initialization' => false,
            ],
        ]);
    }
};
