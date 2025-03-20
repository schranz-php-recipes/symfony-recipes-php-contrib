<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mwu_sdk', [
        'switches' => [
            [
                'ip_address' => 'CHANGE_ME!',
                'port' => 'CHANGE_ME!',
                'light_modules_generator' => [
                    'first_module_id' => 1,
                    'increment_between_module_ids' => 1,
                    'number_of_modules' => 4,
                ],
            ],
        ],
        'behavior' => [
            'display_status' => [
                'light' => [
                    'mode' => 'on',
                    'color' => 'red',
                ],
                'screen' => [
                    'mode' => 'on',
                    'text' => '0000',
                ],
            ],
            'display_status_after_confirm' => [
                'light' => [
                    'mode' => 'on',
                    'color' => 'green',
                ],
                'screen' => [
                    'mode' => 'on',
                    'text' => '0000',
                ],
            ],
            'display_status_after_fn' => [
                'light' => [
                    'mode' => 'on',
                    'color' => 'yellow',
                ],
                'screen' => [
                    'mode' => 'on',
                    'text' => '9999',
                ],
            ],
            'buttons' => [
                'fn' => [
                    'text' => '----',
                ],
                'quantity_keys' => [
                    'mode' => 'increment',
                ],
            ],
        ],
    ]);
};
