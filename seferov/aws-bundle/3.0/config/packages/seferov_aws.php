<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('seferov_aws', [
        'credentials' => [
            'key' => '%env(AWS_CREDENTIALS_KEY)%',
            'secret' => '%env(AWS_CREDENTIALS_SECRET)%',
        ],
        'region' => 'eu-central-1',
    ]);
};
