<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('edb_admin', [
        'admin_icon' => 'code',
        'admin_title' => 'Admin',
        'source_prefix' => 'media_source',
        'cache_prefix' => 'media_cache',
        'media_class' => null,
        'user_class' => null,
    ]);
};
