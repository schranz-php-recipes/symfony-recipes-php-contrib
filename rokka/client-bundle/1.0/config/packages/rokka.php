<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('rokka_client', [
        'api_key' => '%env(ROKKA_API_KEY)%',
        'organization' => '%env(ROKKA_ORGANIZATION)%',
    ]);
};
