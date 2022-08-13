<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('adback_api_client', [
        'access_token' => '%env(ADBACK_API_CLIENT_ACCESS_TOKEN)%',
    ]);
};
