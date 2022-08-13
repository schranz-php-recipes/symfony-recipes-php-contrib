<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('wisembly_amqp', [
        'console_path' => '%kernel.project_dir%/bin/console',
        'broker' => 'Wisembly\AmqpBundle\Broker\PhpAmqpLibBroker',
        'connections' => [
            'default' => '%env(AMQP_URL)%',
        ],
        'gates' => [
            'acme' => [
                'auto_declare' => true,
                'queue' => 'acme_queue',
                'exchange' => 'acme_exchange',
            ],
        ],
    ]);
};
