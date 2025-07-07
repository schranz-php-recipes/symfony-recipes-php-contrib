<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\tagged_iterator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('mock_http_client', 'ExtendedMockHttpClient\ExtendedMockHttpClient')
        ->args([
            '%env(YOUR_SERVICE_URL)%',
        ])
        ->tag('mock.http_client');

    $services->set('BehatHttpMockContext\Collection\ExtendedMockHttpClientCollection')
        ->args([
            tagged_iterator('mock.http_client'),
        ]);
};
