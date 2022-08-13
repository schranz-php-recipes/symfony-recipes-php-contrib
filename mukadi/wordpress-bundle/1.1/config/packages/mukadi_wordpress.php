<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mukadi_wordpress', [
        'table_prefix' => '%env(WP_PREFIX)%',
        'wordpress_directory' => '%kernel.project_dir%/public/%env(WP_DIR)%',
    ]);
};
