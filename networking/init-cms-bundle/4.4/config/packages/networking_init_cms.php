<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/doctrine.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/fos_ck_editor.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/fos_user.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/mopa_bootstrap.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/oneup_flysystem.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/oneup_uploader.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/sonata_admin.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/sonata_block.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/sonata_doctrine_admin.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/sonata_media.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/sonata_notification.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/sonata_user.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/stof_doctrine_extensions.php');

    $containerConfigurator->import(__DIR__.'/@NetworkingInitCmsBundle/Resources/config/cms/symfony_cmf_routing_extra.php');

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
