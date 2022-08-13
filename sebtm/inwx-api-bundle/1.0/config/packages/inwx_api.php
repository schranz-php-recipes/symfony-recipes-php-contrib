<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('inwx_api', [
        'debug' => '%kernel.debug%',
        'environment' => 'development',
        'json' => true,
        'language' => 'en',
        'username' => '%env(resolve:INWX_USERNAME)%',
        'password' => '%env(resolve:INWX_PASSWORD)%',
    ]);
};
