<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults();

    $services->alias('Buzz\Client\BuzzClientInterface', 'buzz.file_get_contents_client');

    $services->set('buzz.file_get_contents_client', 'Buzz\Client\FileGetContents')
        ->args([
            [
                'timeout' => 10,
            ],
        ]);

    $services->set('buzz.curl_client', 'Buzz\Client\Curl')
        ->args([
            [
                'timeout' => 10,
            ],
        ]);

    $services->set('buzz.multi_curl_client', 'Buzz\Client\MultiCurl')
        ->args([
            [
                'timeout' => 10,
            ],
        ]);

    $services->set('Buzz\Browser')
        ->args([
            service('Buzz\Client\BuzzClientInterface'),
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
