<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('corytech_open_api', [
        'handle_exceptions_on_path_prefixes' => [
            '/api/v1',
        ],
    ]);
};
