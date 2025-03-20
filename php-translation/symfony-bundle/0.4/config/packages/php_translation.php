<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('translation', [
        'locales' => [
            'en',
        ],
        'edit_in_place' => [
            'enabled' => false,
            'config_name' => 'app',
        ],
        'configs' => [
            'app' => [
                'dirs' => [
                    '%kernel.project_dir%/templates',
                    '%kernel.project_dir%/src',
                ],
                'output_dir' => '%kernel.project_dir%/translations',
                'excluded_names' => [
                    '*TestCase.php',
                    '*Test.php',
                ],
                'excluded_dirs' => [
                    'cache',
                    'data',
                    'logs',
                ],
            ],
        ],
    ]);
};
