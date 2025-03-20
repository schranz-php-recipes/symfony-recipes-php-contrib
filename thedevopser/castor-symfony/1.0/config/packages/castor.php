<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('castor', [
        'vhost' => [
            'url' => '%env(CASTOR_VHOST_URL)%',
            'nom' => null,
            'server' => '%env(CASTOR_VHOST_SERVER)%',
            'os' => null,
            'ssl' => [
                'enabled' => '%env(bool:CASTOR_VHOST_SSL_ENABLE)%',
                'certificate' => null,
                'certificate_key' => null,
            ],
        ],
    ]);
};
