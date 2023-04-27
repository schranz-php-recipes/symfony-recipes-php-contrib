<?php

declare(strict_types=1);

use Datana\UrlShortener\Api\UrlShortenerApi;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set('Datana\UrlShortener\Api\UrlShortenerClient')
        ->args(['%env(URL_SHORTENER_API_BASE_URI)%', '%env(URL_SHORTENER_API_USERNAME)%', '%env(URL_SHORTENER_API_PASSWORD)%']);

    $services->set(UrlShortenerApi::class);

    $services->alias('Datana\UrlShortener\Api\UrlShortenerApiInterface', 'Datana\UrlShortener\Api\UrlShortenerApi');
};
