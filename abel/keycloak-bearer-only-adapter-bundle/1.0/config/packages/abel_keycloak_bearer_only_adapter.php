<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('abel_keycloak_bearer_only_adapter', [
        'issuer' => '%env(OAUTH_KEYCLOAK_ISSUER)%',
        'realm' => '%env(OAUTH_KEYCLOAK_REALM)%',
        'client_id' => '%env(OAUTH_KEYCLOAK_CLIENT_ID)%',
        'client_secret' => '%env(OAUTH_KEYCLOAK_CLIENT_SECRET)%',
    ]);
};
