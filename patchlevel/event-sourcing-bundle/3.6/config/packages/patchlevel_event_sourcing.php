<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('patchlevel_event_sourcing', [
        'aggregates' => '%kernel.project_dir%/src',
        'events' => '%kernel.project_dir%/src',
        'connection' => [
            'url' => '%env(EVENTSTORE_URL)%',
            'provide_dedicated_connection' => true,
        ],
    ]);
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('patchlevel_event_sourcing', [
            'subscription' => [
                'catch_up' => true,
                'throw_on_error' => true,
                'run_after_aggregate_save' => true,
                'rebuild_after_file_change' => true,
                'auto_setup' => true,
            ],
        ]);
    }
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('patchlevel_event_sourcing', [
            'subscription' => [
                'catch_up' => true,
                'throw_on_error' => true,
                'run_after_aggregate_save' => true,
            ],
        ]);
    }
};
