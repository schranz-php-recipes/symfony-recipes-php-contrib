<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('formatz_fz_hosting', [
        'api_key' => '%env(resolve:FZ_HOSTING_API_KEY)%',
        'api_endpoint' => '%env(resolve:FZ_HOSTING_API_ENDPOINT)%',
    ]);
};
