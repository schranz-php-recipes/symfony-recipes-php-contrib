<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->add('rpc', '/rpc')
        ->defaults([
            '_controller' => 'RpcServerBundle:Rpc:handler',
        ])
        ->methods(['POST']);
};
