<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mailer', [
        'sender_address' => 'noreply@example.com',
        'sender_name' => 'noreply',
    ]);
};
