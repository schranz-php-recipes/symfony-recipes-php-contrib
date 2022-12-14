<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('payum', [
        'storages' => [
            'Payum\Core\Model\Payment' => [
                'filesystem' => [
                    'storage_dir' => '%kernel.project_dir%/var/payum/payments',
                    'id_property' => 'number',
                ],
            ],
        ],
        'security' => [
            'token_storage' => [
                'Payum\Core\Model\Token' => [
                    'filesystem' => [
                        'storage_dir' => '%kernel.project_dir%/var/payum/gateways',
                        'id_property' => 'hash',
                    ],
                ],
            ],
        ],
        'gateways' => [
            'offline' => [
                'factory' => 'offline',
            ],
        ],
    ]);
};
