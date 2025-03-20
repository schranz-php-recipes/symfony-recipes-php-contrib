<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('twig', [
        'globals' => [
            'admin_menu' => [
                'users' => [
                    'translation_key' => 'sidebar.menu.users.title',
                    'users' => [
                        'translation_key' => 'sidebar.menu.users.users',
                        'route' => 'sfs_user_admin_users_list',
                        'role' => 'PERMISSION_SFS_USER_ADMIN_USERS_LIST',
                        'active_expression' => 'sfs_user_admin_users_',
                        'icon' => 'bi bi-people',
                    ],
                    'administrators' => [
                        'translation_key' => 'sidebar.menu.users.administrators',
                        'route' => 'sfs_user_admin_administrators_list',
                        'role' => 'PERMISSION_SFS_USER_ADMIN_ADMINISTRATORS_LIST',
                        'active_expression' => 'sfs_user_admin_administrators_',
                        'icon' => 'bi bi-people-fill',
                    ],
                ],
            ],
        ],
    ]);
};
