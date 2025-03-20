<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('cas', [
        'base_url' => '%env(ECAS_BASE_URL)%',
        'protocol' => [
            'login' => [
                'path' => '/login',
                'default_parameters' => [
                    'service' => '%env(ECAS_SERVICE)%',
                    'authenticationLevel' => '%env(ECAS_AUTHENTICATION_LEVEL)%',
                ],
            ],
            'serviceValidate' => [
                'path' => '%env(ECAS_ASSURANCE_LEVEL)%',
                'default_parameters' => [
                    'userDetails' => 'true',
                    'groups' => '*',
                    'pgtUrl' => '%env(ECAS_PGT_CALLBACK_URL)%',
                    'service' => '%env(ECAS_SERVICE)%',
                ],
            ],
            'logout' => [
                'path' => '/logout',
                'default_parameters' => [
                    'service' => '%env(ECAS_LOGOUT_SERVICE_URL)%',
                ],
            ],
            'proxy' => [
                'path' => '/proxy',
            ],
            'proxyValidate' => [
                'path' => '%env(ECAS_PROXY_ASSURANCE_LEVEL)%',
                'default_parameters' => [
                    'userDetails' => 'true',
                    'pgtUrl' => '%env(ECAS_PGT_CALLBACK_URL)%',
                    'service' => '%env(ECAS_SERVICE)%',
                ],
            ],
        ],
    ]);
};
