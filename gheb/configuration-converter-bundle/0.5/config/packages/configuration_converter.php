<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('configuration_converter', [
        'api_platform_default_export_dir' => '%kernel.project_dir%/config/packages/api-platform/',
    ]);
};
