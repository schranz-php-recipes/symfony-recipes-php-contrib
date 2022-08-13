<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('csa_guzzle', [
        'profiler' => '%kernel.debug%',
        'clients' => [
            'default' => null,
        ],
    ]);
};
