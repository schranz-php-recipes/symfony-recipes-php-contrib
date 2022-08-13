<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('oka_service_discovery', [
        'cache_id' => 'cache.app',
        'load_balancing_algorithm' => 'round-robin',
        'dsn' => 'php://array',
        'options' => null,
    ]);
};
