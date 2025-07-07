<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('behat_doctrine_fixtures', [
        'connections' => [
            'default' => [
                'database_fixtures_paths' => [
                    'PATH_TO_FIXTURES_FOLDER',
                ],
            ],
        ],
    ]);
};
