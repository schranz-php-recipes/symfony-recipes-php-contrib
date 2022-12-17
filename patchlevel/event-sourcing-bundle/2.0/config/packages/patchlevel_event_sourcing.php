<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('patchlevel_event_sourcing', [
        'aggregates' => '%kernel.project_dir%/src',
        'events' => '%kernel.project_dir%/src',
        'connection' => [
            'url' => '%env(EVENTSTORE_URL)%',
        ],
    ]);
};
