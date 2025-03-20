<?php

declare(strict_types=1);

use Datana\Formulario\Api\DateneingabenApi;
use Datana\Formulario\Api\StatisticsApi;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set('Datana\Formulario\Api\FormularioClient')
        ->args([
            '%env(FORMULARIO_API_BASE_URI)%',
            '%env(FORMULARIO_API_TOKEN)%',
        ]);

    $services->set(DateneingabenApi::class);

    $services->alias('Datana\Formulario\Api\DateneingabenApiInterface', 'Datana\Formulario\Api\DateneingabenApi');

    $services->set(StatisticsApi::class);

    $services->alias('Datana\Formulario\Api\StatisticsApiInterface', 'Datana\Formulario\Api\StatisticsApi');
};
