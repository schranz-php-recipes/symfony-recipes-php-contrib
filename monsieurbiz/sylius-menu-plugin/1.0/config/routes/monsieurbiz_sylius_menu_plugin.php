<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@MonsieurBizSyliusMenuPlugin/Resources/config/routes/admin.yaml')
        ->prefix('/%sylius_admin.path_name%');
};
