<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sentry_monolog_adapter', [
        'messenger_logging_middleware' => [
            'logging_strategies' => [[
                'id' => 'sentry_monolog_adapter.log_all_strategy',
            ]],
        ],
    ]);
};
