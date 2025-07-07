<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SyliusCmsPlugin/config/routes/admin.yaml')
        ->prefix('/%sylius_admin.path_name%');

    $routingConfigurator->import('@SyliusCmsPlugin/config/routes/shop.yaml')
        ->prefix('/{_locale}')
        ->requirements([
            '_locale' => '^[A-Za-z]{2,4}(_([A-Za-z]{4}|[0-9]{3}))?(_([A-Za-z]{2}|[0-9]{3}))?$',
        ]);
};
