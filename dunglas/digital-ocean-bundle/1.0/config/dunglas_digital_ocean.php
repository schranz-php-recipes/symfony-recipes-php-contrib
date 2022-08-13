<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dunglas_digital_ocean', [
        'connections' => [
            'default' => '%env(DIGITAL_OCEAN_TOKEN)%',
        ],
    ]);
};
