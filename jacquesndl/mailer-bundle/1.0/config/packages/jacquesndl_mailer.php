<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('jacquesndl_mailer', [
        'sender' => [
            'name' => '%env(JACQUESNDL_MAILER_SENDER_NAME)%',
            'address' => '%env(JACQUESNDL_MAILER_SENDER_ADDRESS)%',
        ],
    ]);
};
