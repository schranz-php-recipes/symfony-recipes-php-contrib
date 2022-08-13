<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('en_igdb_api', [
        'base_url' => '%env(YOUR_BASE_URL)%',
        'api_key' => '%env(YOUR_API_KEY)%',
    ]);
};
