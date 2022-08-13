<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@FOSOAuthServerBundle/Resources/config/routing/token.xml');

    $routingConfigurator->import('@FOSOAuthServerBundle/Resources/config/routing/authorize.xml');
};
