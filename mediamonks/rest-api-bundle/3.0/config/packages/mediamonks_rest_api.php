<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mediamonks_rest_api', [
        'request_matcher' => [
            'path' => '/api',
        ],
    ]);
};
