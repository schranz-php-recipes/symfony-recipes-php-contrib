<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__.'/@MonsieurBizSyliusShippingSlotPlugin/Resources/config/config.php');

    $containerConfigurator->extension('monsieurbiz_sylius_shipping_slot', [
        'expiration' => [
            'slot' => '30 minutes',
        ],
    ]);
};
