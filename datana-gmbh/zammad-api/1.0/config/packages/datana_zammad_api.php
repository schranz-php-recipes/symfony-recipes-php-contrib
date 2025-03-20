<?php

declare(strict_types=1);

use Datana\Zammad\Api\NullTicketsApi;
use Datana\Zammad\Api\TicketsApi;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set('Datana\Zammad\Api\ZammadClient')
        ->args([
            '%env(ZAMMAD_API_BASE_URI)%',
            '%env(ZAMMAD_API_TOKEN)%',
        ]);

    $services->set(TicketsApi::class);

    $services->set(NullTicketsApi::class);

    $services->alias('Datana\Zammad\Api\TicketsApiInterface', 'Datana\Zammad\Api\TicketsApi');
    if ($containerConfigurator->env() === 'prod') {
        $containerConfigurator->extension('services', [
            'Datana\Zammad\Api\TicketsApiInterface' => service('Datana\Zammad\Api\TicketsApi'),
        ]);
    }
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('services', [
            'Datana\Zammad\Api\TicketsApiInterface' => service('Datana\Zammad\Api\NullTicketsApi'),
        ]);
    }
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('services', [
            'Datana\Zammad\Api\TicketsApiInterface' => service('Datana\Zammad\Api\NullTicketsApi'),
        ]);
    }
};
