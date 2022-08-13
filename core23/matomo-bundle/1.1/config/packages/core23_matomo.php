<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sonata_block', [
        'blocks' => [
            'core23_matomo.block.statistic' => null,
            'core23_matomo.block.tracker' => null,
        ],
    ]);
};
