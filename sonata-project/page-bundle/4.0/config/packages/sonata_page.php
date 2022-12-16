<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sonata_block', [
        'default_contexts' => ['sonata_page_bundle'],
    ]);

    $containerConfigurator->extension('sonata_admin', [
        'assets' => [
            'extra_javascripts' => ['bundles/sonatapage/app.js'],
            'extra_stylesheets' => ['bundles/sonatapage/app.css'],
        ],
    ]);

    $containerConfigurator->extension('sonata_page', [
        'multisite' => 'host',
        'use_streamed_response' => false,
        'router_auto_register' => [
            'enabled' => true,
            'priority' => 150,
        ],
        'ignore_route_patterns' => ['^(.*)admin(.*)', '^_(.*)'],
        'ignore_routes' => ['sonata_page_cache_esi', 'sonata_page_cache_ssi', 'sonata_page_js_sync_cache', 'sonata_page_js_async_cache', 'sonata_cache_esi', 'sonata_cache_ssi', 'sonata_cache_js_async', 'sonata_cache_js_sync', 'sonata_cache_apc'],
        'ignore_uri_patterns' => ['^/admin\/'],
        'default_template' => 'default',
        'templates' => [
            'default' => [
                'path' => '@SonataPage/layout.html.twig',
                'name' => 'default',
                'containers' => [
                    'header' => [
                        'name' => 'Header',
                    ],
                    'content_top' => [
                        'name' => 'Top content',
                    ],
                    'content' => [
                        'name' => 'Main content',
                    ],
                    'content_bottom' => [
                        'name' => 'Bottom content',
                    ],
                    'footer' => [
                        'name' => 'Footer',
                    ],
                ],
                'matrix' => [
                    'layout' => 'HHHHHHHH
HHHHHHHH
TTTTTTTT
TTTTTTTT
CCCCCCCC
CCCCCCCC
BBBBBBBB
BBBBBBBB
FFFFFFFF
FFFFFFFF
',
                    'mapping' => [
                        'H' => 'header',
                        'T' => 'content_top',
                        'C' => 'content',
                        'B' => 'content_bottom',
                        'F' => 'footer',
                    ],
                ],
            ],
        ],
        'direct_publication' => '%kernel.debug%',
        'catch_exceptions' => [
            'not_found' => [404],
            'fatal' => [500],
        ],
    ]);
};
