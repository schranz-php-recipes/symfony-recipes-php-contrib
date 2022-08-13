<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('drenso_oidc', [
        'clients' => [
            'default' => [
                'well_known_url' => '%env(OIDC_WELL_KNOWN_URL)%',
                'client_id' => '%env(OIDC_CLIENT_ID)%',
                'client_secret' => '%env(OIDC_CLIENT_SECRET)%',
            ],
        ],
    ]);
};
