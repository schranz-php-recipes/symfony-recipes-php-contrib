<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('oka_input_handler', [
        'error_handler' => [
            'default_request_format' => 'json',
            'override_problem_normalizer' => true,
        ],
    ]);
};
