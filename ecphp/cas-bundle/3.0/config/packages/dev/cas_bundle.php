<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('cas', [
        'base_url' => 'https://ecas.ec.europa.eu/cas',
        'protocol' => [
            'login' => [
                'path' => '/login',
                'default_parameters' => [
                    'service' => 'cas_bundle_homepage',
                ],
            ],
            'serviceValidate' => [
                'path' => '/p3/serviceValidate',
                'default_parameters' => [
                    'format' => 'JSON',
                ],
            ],
            'logout' => [
                'path' => '/logout',
                'default_parameters' => [
                    'service' => 'cas_bundle_homepage',
                ],
            ],
            'proxy' => [
                'path' => '/proxy',
            ],
            'proxyValidate' => [
                'path' => '/p3/proxyValidate',
                'default_parameters' => [
                    'format' => 'JSON',
                ],
            ],
        ],
    ]);
};
