<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('doctrine_phpcr', [
        'odm' => [
            'auto_generate_proxy_classes' => false,
            'metadata_cache_driver' => [
                'type' => 'service',
                'id' => 'doctrine_phpcr.system_cache_provider',
            ],
        ],
        'session' => [
            'backend' => [
                'caches' => [
                    'meta' => 'doctrine_phpcr.meta_cache_provider',
                    'nodes' => 'doctrine_phpcr.nodes_cache_provider',
                ],
            ],
        ],
    ]);

    $services = $containerConfigurator->services();

    $services->set('doctrine_phpcr.meta_cache_provider', 'Symfony\Component\Cache\DoctrineProvider')
        ->private()
        ->args([service('doctrine_phpcr.meta_cache_pool')]);

    $services->set('doctrine_phpcr.nodes_cache_provider', 'Symfony\Component\Cache\DoctrineProvider')
        ->private()
        ->args([service('doctrine_phpcr.nodes_cache_pool')]);

    $services->set('doctrine_phpcr.system_cache_provider', 'Symfony\Component\Cache\DoctrineProvider')
        ->private()
        ->args([service('doctrine_phpcr.system_cache_pool')]);

    $containerConfigurator->extension('framework', [
        'cache' => [
            'pools' => [
                'doctrine_phpcr.meta_cache_pool' => [
                    'adapter' => 'cache.app',
                ],
                'doctrine_phpcr.nodes_cache_pool' => [
                    'adapter' => 'cache.app',
                ],
                'doctrine_phpcr.system_cache_pool' => [
                    'adapter' => 'cache.system',
                ],
            ],
        ],
    ]);
};
