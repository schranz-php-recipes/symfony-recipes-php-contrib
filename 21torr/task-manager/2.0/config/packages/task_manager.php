<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('task_manager', [
        'queues' => [
            'app_very_urgent',
            'app_urgent',
            'app',
        ],
    ]);
};
