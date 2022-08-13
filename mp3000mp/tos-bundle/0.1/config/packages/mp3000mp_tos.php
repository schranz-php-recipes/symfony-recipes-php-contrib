<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mp3000mp_tos', [
        'kernel_event' => [
            'authenticators' => ['main'],
            'priority' => -20,
        ],
        'user_provider' => 'App\Entity\User',
    ]);
};
