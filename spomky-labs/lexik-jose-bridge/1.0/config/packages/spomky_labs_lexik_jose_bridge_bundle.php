<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('lexik_jose', [
        'ttl' => 1000,
        'server_name' => '%env(SL_JOSE_BRIDGE_SERVER_NAME)%',
        'key_storage_folder' => '%env(SL_JOSE_BRIDGE_KEY_STORAGE_FOLDER)%/',
        'signature_algorithm' => 'RS512',
        'signature_key_configuration' => [
            'kty' => 'RSA',
            'size' => 4096,
        ],
        'encryption' => [
            'enabled' => true,
            'encryption_key_configuration' => [
                'kty' => 'oct',
                'size' => 256,
            ],
            'key_encryption_algorithm' => 'A256KW',
            'content_encryption_algorithm' => 'A256CBC-HS512',
        ],
    ]);
};
