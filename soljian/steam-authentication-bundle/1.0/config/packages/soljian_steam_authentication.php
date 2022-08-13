<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('soljian_steam_authentication', [
        'api_key' => '%env(STEAM_API_KEY)%',
        'login_route' => '',
        'login_redirect' => '',
        'user_class' => '',
    ]);
};
