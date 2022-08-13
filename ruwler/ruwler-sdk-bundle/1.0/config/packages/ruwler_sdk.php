<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ruwler_sdk', [
        'api_key' => '%env(RUWLER_SDK_API_KEY)%',
    ]);
};
