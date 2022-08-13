<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@BecklynTranslationsBundle/Resources/config/routes.yaml')
        ->prefix('/_v/translations/');
};
