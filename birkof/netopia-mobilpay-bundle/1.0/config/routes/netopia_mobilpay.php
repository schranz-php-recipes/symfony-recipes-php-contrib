<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->add('netopia_mobilpay_return_url', '/netopia-mobilpay/thank-you')
        ->defaults([
            '_controller' => 'FrameworkBundle:Redirect:redirect',
            'route' => 'default',
            'permanent' => true,
        ])
        ->methods(['GET']);

    $routingConfigurator->add('netopia_mobilpay_confirm_url', '/netopia-mobilpay/confirm')
        ->defaults([
            '_controller' => 'FrameworkBundle:Redirect:redirect',
            'route' => 'default',
            'permanent' => true,
        ])
        ->methods(['POST']);
};
