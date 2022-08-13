<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('framework', [
        'messenger' => [
            'enabled' => true,
            'serializer' => [
                'default_serializer' => 'messenger.transport.jms_serializer',
            ],
        ],
    ]);
};
