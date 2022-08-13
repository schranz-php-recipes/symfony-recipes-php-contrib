<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sulu_form', [
        'mail' => [
            'from' => '%env(SULU_ADMIN_EMAIL)%',
            'to' => '%env(SULU_ADMIN_EMAIL)%',
            'sender' => '%env(SULU_ADMIN_EMAIL)%',
        ],
        'media' => [
            'protected' => true,
        ],
    ]);

    $containerConfigurator->extension('framework', [
        'esi' => true,
        'fragments' => true,
    ]);
};
