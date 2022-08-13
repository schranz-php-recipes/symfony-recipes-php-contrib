<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('redirection_io', [
        'project_key' => 'FIXME',
        'connections' => [
            'my_agent' => 'tcp://127.0.0.1:10301',
        ],
    ]);
};
