<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('doctrine_phpcr', [
        'session' => [
            'backend' => [
                'type' => 'doctrinedbal',
                'connection' => 'default',
                'parameters' => [
                    'jackalope.check_login_on_server' => false,
                ],
            ],
            'workspace' => '%env(PHPCR_WORKSPACE)%',
            'username' => '%env(PHPCR_USER)%',
            'password' => '%env(PHPCR_PASSWORD)%',
        ],
        'odm' => [
            'auto_mapping' => true,
            'auto_generate_proxy_classes' => true,
            'mappings' => [
                'App' => [
                    'mapping' => true,
                    'type' => 'annotation',
                    'dir' => '%kernel.root_dir%/Document',
                    'alias' => 'App',
                    'prefix' => 'App\Document\\',
                    'is_bundle' => false,
                ],
            ],
        ],
    ]);
};
