<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('contentful', [
        'delivery' => [
            'space' => '%env(CONTENTFUL_SPACE_ID)%',
            'token' => '%env(CONTENTFUL_ACCESS_TOKEN)%',
        ],
    ]);
};
