<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sonata_notification', [
        'consumers' => [
            'register_default' => false,
        ],
        'admin' => [
            'enabled' => false,
        ],
    ]);
};
