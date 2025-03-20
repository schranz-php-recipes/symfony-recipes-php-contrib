<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Github\Client')
        ->args([
            service('Github\HttpClient\Builder'),
        ]);

    $services->set('Github\HttpClient\Builder')
        ->args([
            service('?Http\Client\HttpClient'),
            service('?Http\Message\RequestFactory'),
            service('?Http\Message\StreamFactory'),
        ]);
};
