<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ndc_maintenance', [
        'authorized_ips' => [
            '127.0.0.1',
        ],
    ]);
};
