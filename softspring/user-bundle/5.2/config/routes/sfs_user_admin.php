<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SfsUserBundle/config/routing/admin_users.yaml')
        ->prefix('/admin/user');

    $routingConfigurator->import('@SfsUserBundle/config/routing/admin_administrators.yaml')
        ->prefix('/admin/admins');

    $routingConfigurator->import('@SfsUserBundle/config/routing/admin_invitations.yaml')
        ->prefix('/admin/invitations');
};
