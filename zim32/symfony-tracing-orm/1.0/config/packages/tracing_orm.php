<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('tracing', [
        'tracers' => [
            'doctrine' => null,
        ],
    ]);

    $containerConfigurator->extension('orm_tracing', [
        'ignored_patterns' => [
            'messenger_messages',
        ],
    ]);
};
