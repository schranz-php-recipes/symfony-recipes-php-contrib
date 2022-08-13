<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('spiechu_symfony_commons', [
        'get_method_override' => [
            'enabled' => false,
        ],
        'response_schema_validation' => [
            'enabled' => false,
        ],
        'api_versioning' => [
            'enabled' => false,
        ],
    ]);
};
