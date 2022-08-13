<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('slot_mandrill', [
        'api_key' => '%env(MANDRILL_API_KEY)%',
        'default' => [
            'sender' => '%env(MANDRILL_DEFAULT_SENDER)%',
        ],
    ]);
};
