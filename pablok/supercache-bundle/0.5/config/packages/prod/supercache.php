<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('supercache', [
        'enabled' => true,
        'cache_dir' => '%kernel.project_dir%/public/webcache',
        'cache_status_header' => false,
    ]);
};
