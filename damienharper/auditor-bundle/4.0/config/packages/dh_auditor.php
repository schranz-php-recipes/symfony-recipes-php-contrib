<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dh_auditor', [
        'enabled' => true,
        'providers' => [
            'doctrine' => [
                'table_prefix' => null,
                'table_suffix' => '_audit',
            ],
        ],
    ]);
};
