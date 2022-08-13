<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('core23_shariff', [
        'services' => [
            'facebook' => [
                'app_id' => '%env(FACEBOOK_API_ID)%',
                'secret' => '%env(FACEBOOK_API_SECRET)%',
            ],
        ],
    ]);

    $containerConfigurator->extension('sonata_block', [
        'blocks' => [
            'core23_shariff.block.share' => null,
        ],
    ]);

    $containerConfigurator->extension('doctrine_cache', [
        'providers' => [
            'core23_shariff' => [
                'type' => 'php_file',
                'namespace' => 'core23_shariff',
            ],
        ],
    ]);
};
