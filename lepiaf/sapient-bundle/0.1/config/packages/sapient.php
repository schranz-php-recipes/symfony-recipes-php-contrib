<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sapient', [
        'guzzle_middleware' => [
            'unseal' => false,
            'verify' => false,
        ],
        'sealing_public_keys' => null,
        'verifying_public_keys' => null,
    ]);
};
