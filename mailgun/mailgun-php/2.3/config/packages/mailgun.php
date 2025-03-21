<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Mailgun\Mailgun', 'Mailgun\Mailgun')
        ->factory([
            'Mailgun\Mailgun',
            'create',
        ])
        ->args([
            '%env(MAILGUN_API_KEY)%',
        ]);
};
