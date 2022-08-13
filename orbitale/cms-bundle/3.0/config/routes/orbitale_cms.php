<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@OrbitaleCmsBundle/Resources/config/routing/categories.yaml')
        ->prefix('/category/');

    $routingConfigurator->import('@OrbitaleCmsBundle/Resources/config/routing/pages.yaml')
        ->prefix('/page/');
};
