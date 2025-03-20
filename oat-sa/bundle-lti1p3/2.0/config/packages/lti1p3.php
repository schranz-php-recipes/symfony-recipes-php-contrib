<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('lti1p3', [
        'key_chains' => [
            'platformKey' => [
                'key_set_name' => 'platformSet',
                'public_key' => 'file://%kernel.project_dir%/config/secrets/dev/public.key',
                'private_key' => 'file://%kernel.project_dir%/config/secrets/dev/private.key',
                'private_key_passphrase' => null,
            ],
            'toolKey' => [
                'key_set_name' => 'toolSet',
                'public_key' => 'file://%kernel.project_dir%/config/secrets/dev/public.key',
                'private_key' => 'file://%kernel.project_dir%/config/secrets/dev/private.key',
                'private_key_passphrase' => null,
            ],
        ],
        'platforms' => [
            'localPlatform' => [
                'name' => 'Local platform',
                'audience' => 'http://localhost/platform',
                'oidc_authentication_url' => 'http://localhost/lti1p3/oidc/login-authentication',
                'oauth2_access_token_url' => 'http://localhost/lti1p3/auth/platformKey/token',
            ],
        ],
        'tools' => [
            'localTool' => [
                'name' => 'Local tool',
                'audience' => 'http://localhost/tool',
                'oidc_login_initiation_url' => 'http://localhost/lti1p3/oidc/login-initiation',
                'launch_url' => 'http://localhost/lti1p3/tool/launch',
                'deep_link_launch_url' => null,
            ],
        ],
        'registrations' => [
            'local' => [
                'client_id' => 'client_id',
                'platform' => 'localPlatform',
                'tool' => 'localTool',
                'deployment_ids' => [
                    'deploymentId1',
                ],
                'platform_key_chain' => 'platformKey',
                'tool_key_chain' => 'toolKey',
                'platform_jwks_url' => null,
                'tool_jwks_url' => null,
            ],
        ],
    ]);
};
