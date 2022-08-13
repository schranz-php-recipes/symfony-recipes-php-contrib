<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('firebase', [
        'cloud_messaging' => [
            'key' => '%env(FCM_KEY)%',
        ],
    ]);
};
