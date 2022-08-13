<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mcfedr_aws_push', [
        'platforms' => [
            'default' => '%env(AWS_PUSH_DEFAULT_PLATFORM_ARN)%',
        ],
        'aws' => [
            'credentials' => [
                'key' => '%env(AWS_ACCESS_KEY_ID)%',
                'secret' => '%env(AWS_SECRET_ACCESS_KEY)%',
            ],
            'region' => '%env(AWS_REGION)%',
        ],
    ]);
};
