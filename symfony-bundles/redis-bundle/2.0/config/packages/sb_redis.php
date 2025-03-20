<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sb_redis', [
        'clients' => [
            'default' => [
                '$options' => [
                ],
                '$parameters' => [
                    '%env(REDIS_URL)%',
                ],
            ],
        ],
    ]);
};
