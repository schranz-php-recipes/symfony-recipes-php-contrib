<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SyliusCustomerOrderCancellationPlugin/Resources/config/routing.yml')
        ->prefix('/{_locale}')
        ->requirements([
            '_locale' => '^[a-z]{2}(?:_[A-Z]{2})?$',
        ]);
};
