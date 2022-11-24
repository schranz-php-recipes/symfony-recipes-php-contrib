<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@SuluSyliusProducerPlugin/Resources/config/app/config.yaml');

    $containerConfigurator->extension('framework', [
        'messenger' => [
            'transports' => [
                'sulu_sylius_transport' => '%env(SULU_SYLIUS_MESSENGER_TRANSPORT_DSN)%',
            ],
        ],
    ]);
};
