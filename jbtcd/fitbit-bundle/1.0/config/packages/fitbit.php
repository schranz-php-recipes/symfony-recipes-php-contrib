<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fitbit', [
        'clientId' => '%env(FITBIT_CLIENT_ID)%',
        'clientSecret' => '%env(FITBIT_CLIENT_SECRET)%',
        'scopes' => [
            'activity',
            'heartrate',
            'location',
            'nutrition',
            'profile',
            'settings',
            'sleep',
            'social',
            'weight',
        ],
    ]);
};
