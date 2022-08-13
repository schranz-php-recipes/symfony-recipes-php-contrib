<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@TranslationBundle/Resources/config/routing_edit_in_place.yaml')
        ->prefix('/admin');
};
