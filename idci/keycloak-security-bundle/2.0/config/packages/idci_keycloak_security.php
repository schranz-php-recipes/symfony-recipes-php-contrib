<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('idci_keycloak_security', [
        'server_url' => '%env(resolve:KEYCLOAK_SERVER_BASE_URL)%',
        'server_public_url' => '%env(resolve:KEYCLOAK_SERVER_PUBLIC_BASE_URL)%',
        'server_private_url' => '%env(resolve:KEYCLOAK_SERVER_PRIVATE_BASE_URL)%',
        'realm' => '%env(resolve:KEYCLOAK_REALM)%',
        'client_id' => '%env(resolve:KEYCLOAK_CLIENT_ID)%',
        'client_secret' => '%env(resolve:KEYCLOAK_CLIENT_SECRET)%',
        'default_target_route_name' => 'app_home',
        'ssl_verification' => true,
    ]);
};
