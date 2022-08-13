<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@NetgenLayoutsBundle/Resources/config/routing.yml')
        ->prefix('%netgen_layouts.route_prefix%');
};
