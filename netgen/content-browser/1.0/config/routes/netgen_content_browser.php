<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@NetgenContentBrowserBundle/Resources/config/routing.yml')
        ->prefix('%netgen_content_browser.route_prefix%');
};
