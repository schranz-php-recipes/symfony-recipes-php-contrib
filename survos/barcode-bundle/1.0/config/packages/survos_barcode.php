<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('survos_barcode', [
        'foregroundColor' => 'black',
        'widthFactor' => 2,
        'height' => 60,
    ]);
};
