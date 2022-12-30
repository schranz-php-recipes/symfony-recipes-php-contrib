<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ux_zoom', [
        'sdk' => [
            'key' => '%env(ZOOM_SDK_KEY)%',
            'secret' => '%env(ZOOM_SDK_SECRET)%',
        ],
    ]);
};
