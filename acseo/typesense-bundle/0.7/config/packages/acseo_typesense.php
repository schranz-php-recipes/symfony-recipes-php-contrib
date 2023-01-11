<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('acseo_typesense', [
        'typesense' => [
            'url' => '%env(resolve:TYPESENSE_URL)%',
            'key' => '%env(resolve:TYPESENSE_KEY)%',
        ],
        'collections' => null,
    ]);
};
