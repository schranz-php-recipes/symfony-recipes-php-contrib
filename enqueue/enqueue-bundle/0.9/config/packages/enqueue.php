<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('enqueue', [
        'default' => [
            'transport' => '%env(resolve:ENQUEUE_DSN)%',
            'client' => null,
        ],
    ]);
};
