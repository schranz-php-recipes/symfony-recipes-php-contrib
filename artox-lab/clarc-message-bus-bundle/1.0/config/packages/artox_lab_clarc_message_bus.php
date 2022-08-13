<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('artox_lab_clarc_message_bus', [
        'bus' => [
            'middleware' => [
                'add_redelivery_stamp_middleware' => [
                    'retry_count' => 10,
                ],
            ],
        ],
    ]);
};
