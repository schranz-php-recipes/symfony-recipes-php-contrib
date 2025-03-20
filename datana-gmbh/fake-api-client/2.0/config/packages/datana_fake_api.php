<?php

declare(strict_types=1);

use Datana\FakeApi\Formulario\DateneingabenApi;
use Datana\FakeApi\Formulario\StatisticsApi;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set('Datana\FakeApi\FakeApiClient')
        ->args([
            '%env(FAKE_API_BASE_URI)%',
            '%env(FAKE_API_USERNAME)%',
            '%env(FAKE_API_PASSWORD)%',
            '%env(bool:FAKE_API_DISABLE_CACHE)%',
        ]);

    $services->set(DateneingabenApi::class);

    $services->set(StatisticsApi::class);
};
