<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Pusher\Pusher')
        ->public()
        ->args(['%env(PUSHER_KEY)%', '%env(PUSHER_SECRET)%', '%env(PUSHER_APP_ID)%']);
};
