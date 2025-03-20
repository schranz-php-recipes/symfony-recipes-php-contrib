<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('glide', [
        'source' => '%kernel.project_dir%/public',
        'cache' => '%kernel.project_dir%/var/cache/glide',
    ]);
};
