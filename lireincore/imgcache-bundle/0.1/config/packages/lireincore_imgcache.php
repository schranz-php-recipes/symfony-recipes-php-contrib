<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('lireincore_imgcache', [
        'driver' => 'gd',
        'destdir' => '%kernel.project_dir%/public/thumbs',
        'webdir' => '%kernel.project_dir%/public',
    ]);
};
