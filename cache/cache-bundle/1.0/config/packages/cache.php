<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('cache', [
        'session' => [
            'enabled' => '%env(bool:SESSION_CACHE_ENABLED)%',
            'service_id' => 'cache.provider.default',
            'use_tagging' => true,
            'ttl' => 7200,
        ],
        'router' => [
            'enabled' => '%env(bool:ROUTER_CACHE_ENABLED)%',
            'service_id' => 'cache.provider.default',
            'ttl' => 86400,
        ],
        'logging' => [
            'enabled' => '%env(bool:APP_DEBUG)%',
            'logger' => 'logger',
            'level' => 'info',
        ],
    ]);
};
