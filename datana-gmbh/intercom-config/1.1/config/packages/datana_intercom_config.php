<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Datana\Intercom\Config\Config')
        ->args(['%env(INTERCOM_WORKSPACE_APP_ID)%', '%env(INTERCOM_IDENTITY_VERIFICATION_SECRET)%']);
};
