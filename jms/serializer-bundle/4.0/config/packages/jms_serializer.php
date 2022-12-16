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
    if ($containerConfigurator->env() === 'prod') {
        $containerConfigurator->extension('jms_serializer', [
            'visitors' => [
                'json_serialization' => [
                    'options' => ['JSON_UNESCAPED_SLASHES', 'JSON_PRESERVE_ZERO_FRACTION'],
                ],
            ],
        ]);
    }
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('jms_serializer', [
            'visitors' => [
                'json_serialization' => [
                    'options' => ['JSON_PRETTY_PRINT', 'JSON_UNESCAPED_SLASHES', 'JSON_PRESERVE_ZERO_FRACTION'],
                ],
            ],
        ]);
    }
};
