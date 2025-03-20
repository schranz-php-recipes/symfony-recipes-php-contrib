<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults();

    $services->alias('Buzz\Client\BuzzClientInterface', 'buzz.client.file_get_contents');

    $services->alias('Buzz\Client\BatchClientInterface', 'buzz.client.multi_curl');

    $services->alias('Psr\Http\Client\ClientInterface', 'Buzz\Client\BuzzClientInterface');

    $services->set('buzz.client.file_get_contents', 'Buzz\Client\FileGetContents')
        ->args([
            service('Psr\Http\Message\ResponseFactoryInterface'),
            [
                'timeout' => 10,
                'allow_redirects' => false,
            ],
        ]);

    $services->set('buzz.client.curl', 'Buzz\Client\Curl')
        ->args([
            service('Psr\Http\Message\ResponseFactoryInterface'),
            [
                'timeout' => 10,
                'allow_redirects' => false,
            ],
        ]);

    $services->set('buzz.client.multi_curl', 'Buzz\Client\MultiCurl')
        ->args([
            service('Psr\Http\Message\ResponseFactoryInterface'),
            [
                'timeout' => 10,
                'allow_redirects' => false,
            ],
        ]);

    $services->set('Buzz\Browser')
        ->args([
            service('Buzz\Client\BuzzClientInterface'),
            service('Psr\Http\Message\RequestFactoryInterface'),
        ])
        ->call('addMiddleware', [
            service('buzz.middleware.content_length'),
        ])
        ->call('addMiddleware', [
            service('buzz.middleware.logger'),
        ]);

    $services->set('buzz.middleware.content_length', 'Buzz\Middleware\ContentLengthMiddleware');

    $services->set('buzz.middleware.logger', 'Buzz\Middleware\LoggerMiddleware')
        ->args([
            service('?logger'),
        ])
        ->tag('monolog.logger', [
            'channel' => 'buzz',
        ]);
};
