<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Happyr\JsonApiResponseFactory\ResponseFactory')
        ->args([
            service('happyr.fractal.manager'),
        ]);

    $services->set('happyr.fractal.manager', 'League\Fractal\Manager')
        ->call('setSerializer', [
            service('happyr.fractal.json_api_serializer'),
        ]);

    $services->set('happyr.fractal.json_api_serializer', 'League\Fractal\Serializer\JsonApiSerializer');
};
