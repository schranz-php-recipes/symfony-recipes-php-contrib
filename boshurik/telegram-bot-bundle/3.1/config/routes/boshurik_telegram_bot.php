<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@BoShurikTelegramBotBundle/Resources/config/routing.yml')
        ->prefix('/_telegram/%telegram_route_secret%');
};
