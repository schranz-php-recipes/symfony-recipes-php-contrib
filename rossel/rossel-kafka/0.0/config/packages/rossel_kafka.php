<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('rossel_kafka', [
        'broker_url' => '%env(ROSSEL_KAFKA_BROKER_URL)%',
        'producer' => [
            'app_name' => '%env(ROSSEL_KAFKA_PRODUCER_APP_NAME)%',
        ],
    ]);
};
