<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults();

    $services->set('Prooph\EventStoreBusBridge\EventPublisher')
        ->args([service('prooph_service_bus.default_event_bus')])
        ->tag('prooph_event_store.default.plugin');
};
