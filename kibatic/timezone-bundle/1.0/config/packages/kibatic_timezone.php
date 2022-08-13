<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('kibatic_timezone', [
        'default_display_timezone' => 'Europe/Paris',
        'timezone_provider' => 'kibatic_timezone.default_provider',
    ]);
};
