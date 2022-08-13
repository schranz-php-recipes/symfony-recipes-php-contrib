<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('translation', [
        'symfony_profiler' => [
            'enabled' => true,
        ],
        'webui' => [
            'enabled' => true,
        ],
    ]);
};
