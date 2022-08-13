<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mobizel_markdown_docs', [
        'contexts' => [
            'main' => [
                'path' => '/docs',
                'docs_dir' => '%kernel.project_dir%/docs',
                'metadata' => null,
            ],
        ],
    ]);
};
