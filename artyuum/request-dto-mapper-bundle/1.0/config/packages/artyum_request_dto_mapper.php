<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('artyum_request_dto_mapper', [
        'default_extractor' => null,
        'denormalizer' => [
            'default_options' => [
            ],
            'additional_options' => [
            ],
        ],
        'validation' => [
            'enabled' => false,
            'default_groups' => [
            ],
            'additional_groups' => [
            ],
            'throw_on_violation' => true,
        ],
    ]);
};
