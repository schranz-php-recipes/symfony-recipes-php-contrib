<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@BecklynJavaScriptRoutingBundle/Resources/config/routes.yaml')
        ->prefix('/_v/routing');
};
