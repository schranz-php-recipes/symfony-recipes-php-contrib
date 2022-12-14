<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('lexik_jose', [
        'ttl' => 1000,
        'server_name' => '%env(SL_JOSE_BRIDGE_SERVER_NAME)%',
        'key_set' => '%env(SL_JOSE_BRIDGE_SIGNATURE_KEYSET)%',
        'key_index' => '93wgUTMbJm8ZN7MUTQx7xYRpifPiY7GAaAZKTZ9Y3MI',
        'signature_algorithm' => 'HS512',
        'encryption' => [
            'enabled' => true,
            'key_set' => '%env(SL_JOSE_BRIDGE_ENCRYPTION_KEYSET)%',
            'key_index' => 'zCPR8Cv8jbWW1wBckl5LoZt-_bX5vzBJpr1esJbk2aU',
            'key_encryption_algorithm' => 'A256GCMKW',
            'content_encryption_algorithm' => 'A256GCM',
        ],
    ]);
};
