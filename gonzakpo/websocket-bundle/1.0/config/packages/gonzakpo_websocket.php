<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('rolland_rock_websocket', [
        'port' => '%env(WEBSOCKET_PORT)%',
    ]);
};
