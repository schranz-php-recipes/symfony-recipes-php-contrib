<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('leapt_im', [
        'cache_path' => 'cache/im',
        'formats' => [
            'medium' => [
                'thumbnail' => '100x100>',
            ],
        ],
    ]);
};
