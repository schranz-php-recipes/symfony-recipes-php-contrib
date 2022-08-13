<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('jms_serializer', [
        'visitors' => [
            'xml_serialization' => [
                'format_output' => '%kernel.debug%',
            ],
        ],
    ]);
};
