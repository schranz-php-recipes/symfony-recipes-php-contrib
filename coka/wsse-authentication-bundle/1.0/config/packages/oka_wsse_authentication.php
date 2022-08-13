<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('oka_wsse_authentication', [
        'db_driver' => 'orm',
        'nonce' => [
            'save_path' => '%kernel.cache_dir%/oka_wsse/nonces',
        ],
    ]);
};
