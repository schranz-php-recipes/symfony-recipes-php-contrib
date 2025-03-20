<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SyliusPayPalPlugin/Resources/config/admin_routing.yml')
        ->prefix('/%sylius_admin.path_name%');

    $routingConfigurator->import('@SyliusPayPalPlugin/Resources/config/shop_routing.yaml')
        ->prefix('/{_locale}')
        ->requirements([
            '_locale' => '^[A-Za-z]{2,4}(_([A-Za-z]{4}|[0-9]{3}))?(_([A-Za-z]{2}|[0-9]{3}))?$',
        ]);

    $routingConfigurator->import('@SyliusPayPalPlugin/Resources/config/webhook_routing.yaml');
};
