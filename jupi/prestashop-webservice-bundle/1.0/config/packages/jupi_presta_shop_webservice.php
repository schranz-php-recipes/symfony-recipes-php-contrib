<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('jupi_presta_shop_webservice', [
        'connection' => [
            'store_root_path' => '%env(PRESTA_WEBSERVICE_ROOT_PATH)%',
            'authentication_key' => '%env(PRESTA_WEBSERVICE_AUTH_KEY)%',
        ],
    ]);
};
