<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@Lti1p3Bundle/Resources/config/routing/jwks.yaml');

    $routingConfigurator->import('@Lti1p3Bundle/Resources/config/routing/message/platform.yaml');

    $routingConfigurator->import('@Lti1p3Bundle/Resources/config/routing/message/tool.yaml');

    $routingConfigurator->import('@Lti1p3Bundle/Resources/config/routing/service/platform.yaml');
};
