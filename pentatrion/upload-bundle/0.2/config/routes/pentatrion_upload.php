<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@PentatrionUploadBundle/Resources/config/routing.yaml')
        ->prefix('/media-manager');
};
