<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('login_gate', [
        'storages' => ['session'],
        'options' => [
            'max_count_attempts' => 3,
            'timeout' => 600,
            'watch_period' => 3600,
        ],
    ]);
};
