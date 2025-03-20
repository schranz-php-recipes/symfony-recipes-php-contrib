<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sfs_cms', [
        'collections' => [
            'vendor/softspring/cms-module-collection',
        ],
    ]);
};
