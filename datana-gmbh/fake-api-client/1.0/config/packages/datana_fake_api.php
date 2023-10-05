<?php

declare(strict_types=1);

use Datana\FakeApi\Api\Formulario\DateneingabenApi;
use Datana\FakeApi\Api\Formulario\StatisticsApi;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set('Datana\FakeApi\Api\FakeApiClient')
        ->args(['%env(FAKE_API_BASE_URI)%', '%env(FAKE_API_USERNAME)%', '%env(FAKE_API_PASSWORD)%', '%env(bool:FAKE_API_DISABLE_CACHE)%']);

    $services->set(DateneingabenApi::class);

    $services->set(StatisticsApi::class);
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('services', [
            'Datana\Formulario\Api\DateneingabenApiInterface' => service('Datana\FakeApi\Api\Formulario\DateneingabenApi'),
            'Datana\Formulario\Api\StatisticsApiInterface' => service('Datana\FakeApi\Api\Formulario\StatisticsApi'),
        ]);
    }
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('services', [
            'Datana\Formulario\Api\DateneingabenApiInterface' => service('Datana\FakeApi\Api\Formulario\DateneingabenApi'),
            'Datana\Formulario\Api\StatisticsApiInterface' => service('Datana\FakeApi\Api\Formulario\StatisticsApi'),
        ]);
    }
};
