<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('baldinof_road_runner', [
        'should_reboot_kernel' => false,
        'default_integrations' => true,
        'metrics_enabled' => false,
    ]);
};
