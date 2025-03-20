<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('league_oauth2_server', [
        'authorization_server' => [
            'private_key' => '/var/oauth/private.key',
            'private_key_passphrase' => null,
            'encryption_key' => '%env(string:OAUTH2_ENCRYPTION_KEY)%',
        ],
        'resource_server' => [
            'public_key' => '/var/oauth/public.key',
        ],
        'scopes' => [
            'available' => [
                'EMAIL',
            ],
            'default' => [
                'EMAIL',
            ],
        ],
        'persistence' => [
            'doctrine' => null,
        ],
    ]);
};
