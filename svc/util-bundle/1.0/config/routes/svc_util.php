<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SvcUtilBundle/src/Resources/config/routes.xml')
        ->prefix('/svc-util/{_locale}');
};
