<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@MediaMonksSonataMediaBundle/Resources/config/routing_admin.yml');

    $routingConfigurator->import('@MediaMonksSonataMediaBundle/Resources/config/routing.yml');
};
