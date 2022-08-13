<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('jane.serializer.json_encode', 'Symfony\Component\Serializer\Encoder\JsonEncode')
        ->args([[
            'json_encode_options' => 64,
        ]]);

    $services->set('jane.serializer.json_decode', 'Symfony\Component\Serializer\Encoder\JsonDecode')
        ->args([[
            'json_decode_associative' => false,
        ]]);

    $services->set('jane.serializer.json_encoder', 'Symfony\Component\Serializer\Encoder\JsonEncoder')
        ->args([service('jane.serializer.json_encode'), service('jane.serializer.json_decode')]);
};
