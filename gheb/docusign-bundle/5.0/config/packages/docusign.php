<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('docusign', [
        'demo' => '%kernel.debug%',
        'mode' => 'embedded',
        'auth_jwt' => [
            'private_key' => '%env(resolve:DOCUSIGN_PRIVATE_KEY_PATH)%',
            'integration_key' => '%env(DOCUSIGN_INTEGRATION_KEY)%',
            'user_guid' => '%env(DOCUSIGN_USER_GUID)%',
        ],
        'account_id' => '%env(int:DOCUSIGN_ACCOUNT_ID)%',
        'default_signer_name' => 'Grégoire Hébert',
        'default_signer_email' => 'gregoire@les-tilleuls.coop',
        'api_uri' => 'https://www.docusign.net/restapi',
        'callback' => 'docusign_callback',
        'sign_path' => '/my/embedded/sign/path',
        'signatures' => [[
            'page' => 1,
            'x_position' => 200,
            'y_position' => 400,
        ]],
        'storage' => [
            'adapter' => 'local',
            'options' => [
                'directory' => '%kernel.project_dir%/var/storage/default',
            ],
        ],
    ]);
};
