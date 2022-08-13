<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('data', [
        'transition-duration' => 1000,
    ]);

    $containerConfigurator->extension('slides', [[
        'content' => 'Hello world!',
        'data' => [
            'x' => 0,
            'y' => 0,
            'z' => 1000,
            'rotate-x' => 0,
            'rotate-y' => 0,
            'rotate-z' => 0,
        ],
    ]]);
};
