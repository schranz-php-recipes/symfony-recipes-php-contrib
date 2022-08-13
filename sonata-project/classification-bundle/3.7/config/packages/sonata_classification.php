<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sonata_classification', [
        'class' => [
            'category' => 'App\Entity\SonataClassificationCategory',
            'collection' => 'App\Entity\SonataClassificationCollection',
            'context' => 'App\Entity\SonataClassificationContext',
            'tag' => 'App\Entity\SonataClassificationTag',
            'media' => 'App\Entity\SonataMediaMedia',
        ],
    ]);
};
