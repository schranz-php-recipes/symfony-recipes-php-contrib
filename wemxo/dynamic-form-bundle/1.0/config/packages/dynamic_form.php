<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dynamic_form', [
        'recursive' => true,
        'config_paths' => [
            '%kernel.project_dir%/config/dynamic_form',
        ],
        'cache_pool' => null,
    ]);
};
