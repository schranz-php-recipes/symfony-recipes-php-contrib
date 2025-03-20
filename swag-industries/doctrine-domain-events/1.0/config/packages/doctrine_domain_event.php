<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('biig_domain', [
        'persist_listeners' => [
            'doctrine' => [
                'default',
            ],
        ],
    ]);
};
