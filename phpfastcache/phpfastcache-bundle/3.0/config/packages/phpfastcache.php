<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('phpfastcache', [
        'twig_driver' => 'filecache',
        'twig_block_debug' => false,
        'drivers' => [
            'filecache' => [
                'type' => 'Files',
                'parameters' => [
                    'path' => '%env(PHPFASTCACHE_FILECACHE_PATH)%',
                ],
            ],
        ],
    ]);
};
