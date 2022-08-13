<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dekalee_autopilot', [
        'api_key' => '%env(DEKALEE_AUTOPILOT_APIKEY)%',
    ]);
};
