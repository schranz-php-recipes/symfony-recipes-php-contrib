<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('async_aws', [
        'config' => [
            'region' => 'eu-central-1',
            'accessKeyId' => '%env(AWS_KEY)%',
            'accessKeySecret' => '%env(AWS_SECRET)%',
        ],
        'clients' => null,
    ]);
};
