<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sensiolabs_minify', [
        'asset_mapper' => [
            'ignore_paths' => [
                '*.min.js',
                '*.min.css',
            ],
        ],
        'minify' => [
            'download_binary' => true,
        ],
    ]);
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('sensiolabs_minify', [
            'asset_mapper' => false,
        ]);
    }
};
