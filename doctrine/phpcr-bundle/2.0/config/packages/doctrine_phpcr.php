<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('doctrine_phpcr', [
        'session' => [
            'backend' => [
                'type' => 'jackrabbit',
                'url' => 'localhost',
            ],
            'workspace' => '%env(PHPCR_WORKSPACE)%',
            'username' => '%env(PHPCR_USER)%',
            'password' => '%env(PHPCR_PASSWORD)%',
        ],
    ]);
};
