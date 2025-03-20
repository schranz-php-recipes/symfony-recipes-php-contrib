<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SfsCmsBundle/config/routing/admin_pages.yaml')
        ->prefix('/admin/pages');

    $routingConfigurator->import('@SfsCmsBundle/config/routing/admin_routes.yaml')
        ->prefix('/admin/routes');

    $routingConfigurator->import('@SfsCmsBundle/config/routing/admin_menus.yaml')
        ->prefix('/admin/menus');

    $routingConfigurator->import('@SfsCmsBundle/config/routing/admin_blocks.yaml')
        ->prefix('/admin/blocks');

    $routingConfigurator->import('@SfsCmsBundle/config/routing/admin_sites.yaml')
        ->prefix('/admin/sites');

    $routingConfigurator->import('@SfsMediaBundle/config/routing/admin_media.yaml')
        ->prefix('/admin/media');
};
