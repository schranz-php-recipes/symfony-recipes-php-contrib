<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('nfl_fastr_symfony', [
        'timezone' => 'Europe/Berlin',
        'sources' => [
            'playByPlay' => [
                'baseUrl' => 'https://github.com/guga31bb/nflfastR-data',
                'path' => 'tree/master/data',
            ],
            'roster' => [
                'baseUrl' => 'https://github.com/mrcaseb/nflfastR-roster',
                'path' => 'tree/master/data/seasons',
            ],
        ],
    ]);
};
