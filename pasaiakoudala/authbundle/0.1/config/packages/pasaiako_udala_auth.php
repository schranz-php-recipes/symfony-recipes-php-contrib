<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('pasaiako_udala_auth', [
        'route_after_successfull_login' => 'default',
        'LDAP_ADMIN_TALDEAK' => 'Rol-taldea1, Rol-taldea2',
        'LDAP_KUDEATU_TALDEAK' => 'Rol-taldea1, Rol-taldea2',
        'LDAP_USER_TALDEA' => 'Rol-taldea1, Rol-taldea2',
    ]);
};
