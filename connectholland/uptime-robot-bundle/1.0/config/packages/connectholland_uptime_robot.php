<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('connectholland_uptime_robot', [
        'api_key' => '%env(string:UPTIMEROBOT_API_KEY)%',
    ]);
};
