<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@TienvxMbtApiBundle/Resources/config/routing.xml')
        ->prefix('/mbt-api');
};
