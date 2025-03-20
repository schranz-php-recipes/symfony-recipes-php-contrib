<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set('Inpsyde\LogzIoMonolog\Handler\LogzIoHandler')
        ->arg('$token', '%env(LOGZ_IO_TOKEN)%')
        ->arg('$host', 'listener-eu.logz.io');

    $services->set('Datana\LogzIo\Handler\Logger\Processor\AddApplicationNameProcessor')
        ->args([
            '%env(LOGZ_IO_APPLICATION_NAME)%',
        ])
        ->tag('monolog.processor');
};
