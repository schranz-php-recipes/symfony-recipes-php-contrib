<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('bizkit_versioning', [
        'parameter_prefix' => 'application',
        'strategy' => 'semver',
        'vcs' => [
            'tagging_mode' => 'ask',
        ],
    ]);
};
