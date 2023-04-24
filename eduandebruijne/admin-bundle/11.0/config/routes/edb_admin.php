<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('.', 'admin')
        ->prefix('%edb_admin_path%');

    $routingConfigurator->import('@EDBAdminBundle/Resources/config/routes.yaml')
        ->prefix('%edb_admin_path%');
};
