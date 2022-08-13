<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@BitBagSyliusShippingExportPlugin/Resources/config/routing.yml')
        ->prefix('/admin');
};
