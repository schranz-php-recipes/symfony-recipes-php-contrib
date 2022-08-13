<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('commercetools', [
        'api' => [
            'default_client' => 'default',
            'clients' => [
                'default' => [
                    'client_id' => '%env(CTP_CLIENT_ID)%',
                    'client_secret' => '%env(CTP_CLIENT_SECRET)%',
                    'project' => '%env(CTP_PROJECT_KEY)%',
                    'scope' => '%env(CTP_SCOPES)%',
                    'oauth_url' => '%env(CTP_AUTH_URL)%',
                    'api_url' => '%env(CTP_API_URL)%',
                ],
            ],
        ],
    ]);
};
