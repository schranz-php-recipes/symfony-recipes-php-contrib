<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('enhavo_app', [
        'mailer' => [
            'defaults' => [
                'from' => '%env(resolve:MAILER_FROM)%',
                'name' => '%env(resolve:MAILER_NAME)%',
                'to' => '%env(resolve:MAILER_TO)%',
            ],
        ],
        'menu' => null,
    ]);
};
