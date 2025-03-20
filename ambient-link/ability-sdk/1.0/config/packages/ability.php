<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('AmbientLink\SDK\SmartMonkeyConnection')
        ->args([
            service('amnient.link_connection_settings'),
            '%env(AMBIENT_LINK_USERNAME)%',
            '%env(AMBIENT_LINK_PASSWORD)%',
        ]);

    $services->set('amnient.link_connection_settings', 'PhpMqtt\Client\ConnectionSettings');

    $services->alias('PhpMqtt\Client\Contracts\MQTTClient', 'PhpMqtt\Client\MQTTClient');

    $services->set('PhpMqtt\Client\MQTTClient')
        ->args([
            '%env(AMBIENT_LINK_HOST)%',
            '%env(AMBIENT_LINK_PORT)%',
            '%env(AMBIENT_LINK_MONKEY_ID)%',
        ]);

    $services->set('AmbientLink\SDK\Mqtt\MqttAdapter')
        ->arg('$username', '%env(AMBIENT_LINK_USERNAME)%')
        ->arg('$password', '%env(AMBIENT_LINK_PASSWORD)%');
};
