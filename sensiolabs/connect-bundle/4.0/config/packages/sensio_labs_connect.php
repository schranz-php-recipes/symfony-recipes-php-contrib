<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sensio_labs_connect', [
        'app_id' => '%env(SENSIOLABS_CONNECT_APP_ID)%',
        'app_secret' => '%env(SENSIOLABS_CONNECT_APP_SECRET)%',
        'scope' => 'SCOPE_PUBLIC',
    ]);
};
