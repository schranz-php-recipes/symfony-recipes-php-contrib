<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('symfony_health_check', [
        'health_checks' => [
            [
                'id' => 'symfony_health_check.status_up_check',
            ],
        ],
    ]);
};
