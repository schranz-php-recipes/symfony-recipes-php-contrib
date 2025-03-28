<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set('OskarStark\Doctrine\EventSubscriber\MigrationEventSubscriber')
        ->tag('doctrine.event_subscriber', [
            'connection' => 'default',
        ]);
};
