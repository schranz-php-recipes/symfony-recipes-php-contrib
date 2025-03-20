<?php

declare(strict_types=1);

use Datana\Iusta\Api\AktenApi;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set('Datana\Iusta\Api\IustaClient')
        ->args([
            '%env(IUSTA_API_BASE_URI)%',
            '%env(IUSTA_API_USERNAME)%',
            '%env(IUSTA_API_PASSWORD)%',
        ]);

    $services->set(AktenApi::class);

    $services->alias('Datana\Iusta\Api\AktenApiInterface', 'Datana\Iusta\Api\AktenApi');
};
