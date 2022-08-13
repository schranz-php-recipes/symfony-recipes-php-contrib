<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@OdiseoSyliusVendorPlugin/Resources/config/routing/admin.yaml')
        ->prefix('/admin');

    $routingConfigurator->import('@OdiseoSyliusVendorPlugin/Resources/config/routing/shop.yaml')
        ->prefix('/{_locale}/vendors')
        ->requirements([
            '_locale' => '^[a-z]{2}(?:_[A-Z]{2})?$',
        ]);

    $routingConfigurator->import('@OdiseoSyliusVendorPlugin/Resources/config/routing/api.yaml')
        ->prefix('/api');
};
