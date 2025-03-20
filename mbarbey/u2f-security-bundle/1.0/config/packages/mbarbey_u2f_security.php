<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mbarbey_u2f_security', [
        'authentication_route' => 'my_u2f_authentication_route',
        'whitelist_routes' => [
            'login',
            'logout',
        ],
    ]);
};
