<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('svg_inline', [
        'path' => '%kernel.project_dir%/assets/svg',
    ]);
};
