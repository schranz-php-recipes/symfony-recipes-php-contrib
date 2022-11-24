<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@MonsieurBizSyliusShippingSlotPlugin/Resources/config/config.yaml');

    $containerConfigurator->extension('monsieurbiz_sylius_shipping_slot', [
        'expiration' => [
            'slot' => '30 minutes',
        ],
    ]);
};
