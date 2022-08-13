<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@SuluFormBundle/Resources/config/routing_api.yml', 'rest')
        ->prefix('/admin/api');
};
