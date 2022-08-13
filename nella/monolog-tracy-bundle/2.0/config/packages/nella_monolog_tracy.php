<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('monolog', [
        'handlers' => [
            'blueScreen' => [
                'type' => 'tracyBlueScreen',
            ],
        ],
    ]);

    $containerConfigurator->extension('monolog_tracy', [
        'log_directory' => '%kernel.logs_dir%/tracy',
    ]);
};
