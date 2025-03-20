<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('shopware_app', [
        'name' => '%env(SHOPWARE_APP_NAME)%',
        'secret' => '%env(SHOPWARE_APP_SECRET)%',
        'storage' => 'auto',
        'doctrine' => [
            'shop_class' => 'App\Entity\Shop',
        ],
    ]);
};
