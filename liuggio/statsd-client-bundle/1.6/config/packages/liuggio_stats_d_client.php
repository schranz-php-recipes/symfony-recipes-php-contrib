<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('liuggio_stats_d_client', [
        'connection' => [
            'host' => '%env(STATS_D_HOST)%',
            'port' => '%env(STATS_D_PORT)%',
            'protocol' => '%env(STATS_D_PROTOCOL)%',
        ],
    ]);
};
