<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('oka_pagination', [
        'db_driver' => 'orm',
        'twig' => [
            'enable_extension' => false,
        ],
    ]);
};
