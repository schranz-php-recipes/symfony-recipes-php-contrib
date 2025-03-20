<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ov_json_rpc_api', [
        'access_control_allow_origin_list' => [
            'localhost',
            'api.localhost',
        ],
        'swagger' => [
            'api_v1' => [
                'api_version' => '1',
                'base_path' => '%env(string:OV_JSON_RPC_API_BASE_URL)%',
                'auth_token_name' => 'X-AUTH-TOKEN',
                'auth_token_test_value' => '%env(string:OV_JSON_RPC_API_AUTH_TOKEN)%',
                'info' => [
                    'title' => 'Some awesome api title here',
                    'description' => 'Some description about your api here would be appreciated if you like',
                    'terms_of_service_url' => 'https://terms_of_service_url.test/url',
                    'contact' => [
                        'name' => 'John Doe',
                        'url' => 'https://john-doe.test',
                        'email' => 'john.doe@john-doe.test',
                    ],
                    'license' => 'MIT license',
                    'licenseUrl' => 'https://john-doe.test/mit-license',
                ],
            ],
        ],
    ]);
};
