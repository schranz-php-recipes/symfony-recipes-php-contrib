<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ikoene_marvel_api', [
        'public_api_key' => '%env(MARVEL_PUBLIC_API_KEY)%',
        'private_api_key' => '%env(MARVEL_PRIVATE_API_KEY)%',
    ]);
};
