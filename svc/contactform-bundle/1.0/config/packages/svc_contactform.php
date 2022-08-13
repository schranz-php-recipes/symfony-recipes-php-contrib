<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('svc_contactform', [
        'contact_mail' => 'dev@sv-systems.com',
        'route_after_send' => 'index',
    ]);
};
