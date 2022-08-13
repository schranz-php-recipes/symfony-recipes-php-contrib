<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->add('app.swagger', '/api/doc.json')
        ->defaults([
            '_controller' => 'nelmio_api_doc.controller.swagger',
        ])
        ->methods(['GET']);
};
