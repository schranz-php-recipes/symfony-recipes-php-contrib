<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sulu_sylius_consumer', [
        'sylius_base_url' => '%env(SYLIUS_BASE_URL)%',
    ]);

    $containerConfigurator->extension('framework', [
        'messenger' => [
            'transports' => [
                'sulu_sylius_transport' => '%env(SULU_SYLIUS_MESSENGER_TRANSPORT_DSN)%',
            ],
            'buses' => [
                'sulu_sylius_producer.messenger_bus' => [
                    'middleware' => ['doctrine_transaction'],
                ],
            ],
        ],
    ]);
};
