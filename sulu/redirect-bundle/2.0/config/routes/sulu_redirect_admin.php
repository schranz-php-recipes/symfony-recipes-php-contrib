<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SuluRedirectBundle/Resources/config/routing_api.yml', 'rest')
        ->prefix('/admin/api');

    $routingConfigurator->import('@SuluRedirectBundle/Resources/config/routing.yml')
        ->prefix('/admin/redirects');
};
