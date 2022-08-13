<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@KunstmaanSitemapBundle/Resources/config/routing.yml')
        ->prefix('/')
        ->requirements([
            '_locale' => '%kunstmaan_admin.required_locales%',
        ]);
};
