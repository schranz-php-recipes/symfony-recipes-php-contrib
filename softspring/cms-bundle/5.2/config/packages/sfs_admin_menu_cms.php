<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('twig', [
        'globals' => [
            'admin_menu' => [
                'cms' => [
                    'translation_key' => 'sidebar.menu.cms.title',
                    'pages' => [
                        'translation_key' => 'sidebar.menu.cms.pages',
                        'route' => 'sfs_cms_admin_content_page_list',
                        'active_expression' => 'sfs_cms_admin_content_page_',
                        'icon' => 'bi bi-code-slash',
                    ],
                    'menus' => [
                        'translation_key' => 'sidebar.menu.cms.menus',
                        'route' => 'sfs_cms_admin_menus_list',
                        'active_expression' => 'sfs_cms_admin_menus_',
                        'icon' => 'bi bi-list-nested',
                    ],
                    'blocks' => [
                        'translation_key' => 'sidebar.menu.cms.blocks',
                        'route' => 'sfs_cms_admin_blocks_list',
                        'active_expression' => 'sfs_cms_admin_blocks_',
                        'icon' => 'bi bi-puzzle',
                    ],
                    'medias' => [
                        'translation_key' => 'sidebar.menu.cms.medias',
                        'route' => 'sfs_media_admin_medias_list',
                        'active_expression' => 'sfs_media_admin_medias_',
                        'icon' => 'bi bi-images',
                    ],
                    'routes' => [
                        'translation_key' => 'sidebar.menu.cms.routes',
                        'route' => 'sfs_cms_admin_routes_list',
                        'active_expression' => 'sfs_cms_admin_routes_',
                        'icon' => 'bi bi-signpost-split',
                    ],
                    'sites' => [
                        'translation_key' => 'sidebar.menu.cms.sites',
                        'route' => 'sfs_cms_admin_sites_list',
                        'active_expression' => 'sfs_cms_admin_sites_',
                        'icon' => 'bi bi-diagram-3',
                    ],
                ],
            ],
        ],
    ]);
};
