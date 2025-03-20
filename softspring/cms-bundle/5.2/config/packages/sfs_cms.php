<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@SfsCmsBundle/config/security/admin_role_hierarchy.yaml');

    $containerConfigurator->extension('security', [
        'role_hierarchy' => [
            'ROLE_ADMIN' => [
                'ROLE_SFS_MEDIA_ADMIN_MEDIAS_RW',
                'ROLE_SFS_CMS_ADMIN_BLOCKS_RW',
                'ROLE_SFS_CMS_ADMIN_CONTENTS_RW',
                'ROLE_SFS_CMS_ADMIN_ROUTES_RW',
                'ROLE_SFS_CMS_ADMIN_MENUS_RW',
                'ROLE_SFS_CMS_ADMIN_SITES_RO',
                'ROLE_SFS_CMS_ADMIN_CONTENTS_TRANSLATOR',
            ],
        ],
    ]);

    $containerConfigurator->extension('sfs_cms', [
        'site' => [
            'identification' => 'domain',
            'throw_not_found' => false,
        ],
    ]);
};
