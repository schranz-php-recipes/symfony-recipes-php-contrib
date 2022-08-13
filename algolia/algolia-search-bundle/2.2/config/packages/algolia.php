<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('algolia', [
        'application_id' => '%env(ALGOLIA_APP_ID)%',
        'api_key' => '%env(ALGOLIA_API_KEY)%',
    ]);
};
