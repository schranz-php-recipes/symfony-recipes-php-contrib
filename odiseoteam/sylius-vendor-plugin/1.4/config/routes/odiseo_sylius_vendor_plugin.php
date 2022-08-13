<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@OdiseoSyliusVendorPlugin/Resources/config/routing/admin.yaml')
        ->prefix('/admin');

    $routingConfigurator->import('@OdiseoSyliusVendorPlugin/Resources/config/routing/shop.yaml')
        ->prefix('/{_locale}/vendors')
        ->requirements([
            '_locale' => '^[A-Za-z]{2,4}(_([A-Za-z]{4}|[0-9]{3}))?(_([A-Za-z]{2}|[0-9]{3}))?$',
        ]);

    $routingConfigurator->import('@OdiseoSyliusVendorPlugin/Resources/config/routing/api.yaml')
        ->prefix('/api');
};
