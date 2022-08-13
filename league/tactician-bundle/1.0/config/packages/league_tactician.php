<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('tactician', [
        'commandbus' => [
            'default' => [
                'middleware' => ['tactician.middleware.command_handler'],
            ],
        ],
    ]);
};
