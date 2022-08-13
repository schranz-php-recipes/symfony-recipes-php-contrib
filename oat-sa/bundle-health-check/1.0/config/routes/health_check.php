<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@HealthCheckBundle/Resources/config/routing/health_check_check.yaml');

    $routingConfigurator->import('@HealthCheckBundle/Resources/config/routing/health_check_ping.yaml');
};
