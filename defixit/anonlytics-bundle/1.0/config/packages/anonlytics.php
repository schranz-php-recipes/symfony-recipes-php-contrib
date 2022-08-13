<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('anonlytics', [
        'client_token' => '%env(resolve:ANONLYTICS_CLIENT_TOKEN)%',
        'site_token' => '%env(resolve:ANONLYTICS_SITE_TOKEN)%',
    ]);
};
