<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@KunstmaanFormBundle/Resources/config/routing.yml')
        ->prefix('/{_locale}/')
        ->requirements([
            '_locale' => '%kunstmaan_admin.required_locales%',
        ]);
};
