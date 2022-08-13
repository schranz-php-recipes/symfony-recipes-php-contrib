<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('svc_util', [
        'mailer' => [
            'mail_address' => 'dev@sv-systems.com',
            'mail_name' => 'Test User',
        ],
    ]);
};
