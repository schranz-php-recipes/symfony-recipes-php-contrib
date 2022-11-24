<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/doctrine.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/fos_ck_editor.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/fos_user.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/mopa_bootstrap.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/oneup_flysystem.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/oneup_uploader.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/sonata_admin.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/sonata_block.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/sonata_core.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/sonata_doctrine_admin.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/sonata_formatter.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/sonata_media.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/sonata_notification.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/sonata_user.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/stof_doctrine_extensions.yaml');

    $containerConfigurator->import('@NetworkingInitCmsBundle/Resources/config/cms/symfony_cmf_routing_extra.yaml');

    $containerConfigurator->extension('jms_serializer', [
        'metadata' => [
            'directories' => [
                'NetworkingSonataMediaBundle' => [
                    'namespace_prefix' => 'Sonata\MediaBundle',
                    'path' => service('NetworkingInitCmsBundle/Resources/config/serializer'),
                ],
                'app' => [
                    'namespace_prefix' => 'App',
                    'path' => '%kernel.project_dir%/config/serializer',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('networking_init_cms', [
        'class' => [
            'page' => 'App\Entity\Page',
            'user' => 'App\Entity\User',
        ],
        'templates' => [
            'app_single_column' => [
                'template' => '@NetworkingInitCms/sandbox/page/one_column.html.twig',
                'name' => 'Single Column',
                'icon' => 'bundles/networkinginitcms/img/template_header_one_column.png',
                'zones' => [[
                    'name' => 'header',
                    'class' => 'col-md-12',
                ], [
                    'name' => 'main_content',
                    'class' => 'col-md-12',
                ]],
            ],
            'app_two_column' => [
                'template' => '@NetworkingInitCms/sandbox/page/two_column.html.twig',
                'name' => 'Two Column',
                'icon' => 'bundles/networkinginitcms/img/template_header_two_column.png',
                'zones' => [[
                    'name' => 'header',
                    'class' => 'col-md-12',
                ], [
                    'name' => 'left',
                    'class' => 'col-md-3',
                ], [
                    'name' => 'right',
                    'class' => 'col-md-9',
                ]],
            ],
        ],
        'cache' => [
            'activate' => true,
        ],
    ]);
};
