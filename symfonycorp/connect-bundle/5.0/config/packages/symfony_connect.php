<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('symfony_connect', [
        'app_id' => '%env(SYMFONY_CONNECT_APP_ID)%',
        'app_secret' => '%env(SYMFONY_CONNECT_APP_SECRET)%',
        'scope' => 'SCOPE_PUBLIC',
    ]);
};
