<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SfsUserBundle/config/routing/login.yaml');

    $routingConfigurator->import('@SfsUserBundle/config/routing/reset_password.yaml')
        ->prefix('/reset-password');

    $routingConfigurator->import('@SfsUserBundle/config/routing/change_password.yaml')
        ->prefix('/user/change-password');

    $routingConfigurator->import('@SfsUserBundle/config/routing/preferences.yaml')
        ->prefix('/user/preferences');
};
