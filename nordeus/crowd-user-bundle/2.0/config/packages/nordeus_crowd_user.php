<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('nordeus_crowd_user', [
        'crowd_application_name' => '%env(NORDEUS_CROWD_APPLICATION_NAME)%',
        'crowd_application_password' => '%env(NORDEUS_CROWD_APPLICATION_PASSWORD)%',
        'crowd_service_url' => 'http://crowd.your_domain.com:8095',
        'sso_cookie_domain' => 'your_domain.com',
        'roles_to_groups' => [
            'ROLE_USER' => ['users'],
            'ROLE_ADMIN' => ['admins', 'superadmins'],
        ],
    ]);
};
