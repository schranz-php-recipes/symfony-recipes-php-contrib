<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ise_web_security', [
        'defaults' => [
            'coop' => [
                'active' => true,
                'policy' => 'same-origin',
            ],
            'coep' => [
                'active' => true,
                'policy' => 'require-corp',
            ],
            'fetch_metadata' => [
                'active' => true,
                'allowed_endpoints' => [
                ],
            ],
            'trusted_types' => [
                'active' => false,
            ],
        ],
    ]);
};
