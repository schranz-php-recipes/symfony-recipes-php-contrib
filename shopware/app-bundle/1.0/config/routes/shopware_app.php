<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@ShopwareAppBundle/Resources/config/routing/lifecycle.xml')
        ->prefix('/app');

    $routingConfigurator->import('@ShopwareAppBundle/Resources/config/routing/webhook.xml')
        ->prefix('/app');
};
