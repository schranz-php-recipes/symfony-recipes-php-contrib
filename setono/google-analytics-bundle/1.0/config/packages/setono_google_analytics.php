<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('setono_google_analytics', [
        'gtag' => [
            'properties' => [[
                'measurement_id' => '%env(GOOGLE_ANALYTICS_MEASUREMENT_ID)%',
            ]],
        ],
    ]);
};
