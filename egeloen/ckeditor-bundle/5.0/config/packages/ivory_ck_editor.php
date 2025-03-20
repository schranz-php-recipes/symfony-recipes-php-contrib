<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ivory_ck_editor', [
        'default_config' => 'simple_toolbar',
        'configs' => [
            'simple_toolbar' => [
                'toolbar' => [
                    [
                        'Bold',
                        'Italic',
                        'Strike',
                        'Link',
                    ],
                    [
                        'BulletedList',
                        'NumberedList',
                        '-',
                        'Outdent',
                        'Indent',
                    ],
                    [
                        'Copy',
                        'Paste',
                        'PasteFromWord',
                        '-',
                        'Undo',
                        'Redo',
                    ],
                    [
                        'Source',
                    ],
                ],
            ],
        ],
    ]);
};
