<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->add('symfony_connect_callback', '/connect/callback');

    $routingConfigurator->add('symfony_connect_login', '/connect/login')
        ->controller('SymfonyCorp\Bundle\ConnectBundle\Controller\OAuthController::newSessionAction')
        ->methods([
            'GET',
        ]);
};
