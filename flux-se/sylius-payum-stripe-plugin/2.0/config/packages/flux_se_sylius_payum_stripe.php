<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@FluxSESyliusPayumStripePlugin/Resources/config/config.yaml');

    $containerConfigurator->extension('flux_se_sylius_payum_stripe', [
        'line_item_image' => [
            'imagine_filter' => 'sylius_shop_product_original',
            'fallback_image' => 'https://placehold.it/400x300',
        ],
    ]);
};
