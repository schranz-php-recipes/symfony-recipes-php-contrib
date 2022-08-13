<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('eu_login_api_authentication', [
        'client_id' => '%env(EULOGIN_CLIENT_ID)%',
        'client_secret' => '%env(EULOGIN_CLIENT_SECRET)%',
        'environment' => '%env(EULOGIN_ENV)%',
    ]);
};
