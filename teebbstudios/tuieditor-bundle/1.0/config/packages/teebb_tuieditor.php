<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('teebb_tui_editor', [
        'default_config' => 'basic_config',
        'configs' => [
            'basic_config' => [
                'to_html' => false,
                'exts' => [
                    'scrollSync',
                    'colorSyntax',
                    'uml',
                    'chart',
                    'mark',
                    'table',
                ],
            ],
        ],
    ]);
};
