<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sonata_admin', [
        'title' => 'Sonata Admin',
        'dashboard' => [
            'blocks' => [
                [
                    'type' => 'sonata.admin.block.admin_list',
                    'position' => 'left',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('sonata_block', [
        'blocks' => [
            'sonata.admin.block.admin_list' => [
                'contexts' => [
                    'admin',
                ],
            ],
        ],
    ]);
};
