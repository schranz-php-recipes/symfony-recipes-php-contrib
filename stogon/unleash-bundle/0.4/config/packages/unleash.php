<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('unleash', [
        'api_url' => 'https://gitlab.com/api/v4/feature_flags/unleash/<project_id>/',
        'instance_id' => '<some ID>',
        'environment' => '%kernel.environment%',
        'cache' => [
            'enabled' => true,
            'service' => service('cache.app'),
            'ttl' => 15,
        ],
    ]);
};
