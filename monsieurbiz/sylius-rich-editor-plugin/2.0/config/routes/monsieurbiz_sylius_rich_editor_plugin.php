<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@MonsieurBizSyliusRichEditorPlugin/Resources/config/routing/admin.yaml')
        ->prefix('/%sylius_admin.path_name%');
};
