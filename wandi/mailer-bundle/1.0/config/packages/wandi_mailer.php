<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('wandi_mailer', [
        'sender' => [
            'name' => '%env(WANDI_MAILER_SENDER_NAME)%',
            'address' => '%env(WANDI_MAILER_SENDER_ADDRESS)%',
        ],
    ]);
};
