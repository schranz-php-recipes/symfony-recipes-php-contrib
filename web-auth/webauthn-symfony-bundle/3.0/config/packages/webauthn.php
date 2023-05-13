<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('webauthn', [
        'credential_repository' => 'Webauthn\Bundle\Repository\DummyPublicKeyCredentialSourceRepository',
        'user_repository' => 'Webauthn\Bundle\Repository\DummyPublicKeyCredentialUserEntityRepository',
        'creation_profiles' => [
            'default' => [
                'rp' => [
                    'name' => '%env(RELYING_PARTY_NAME)%',
                    'id' => '%env(RELYING_PARTY_ID)%',
                ],
            ],
        ],
        'request_profiles' => [
            'default' => [
                'rp_id' => '%env(RELYING_PARTY_ID)%',
            ],
        ],
    ]);
};
