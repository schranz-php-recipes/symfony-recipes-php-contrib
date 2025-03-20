<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ijanki_prometheus', [
        'storage_adapter_service' => 'TweedeGolf\PrometheusClient\Storage\ApcuAdapter',
        'metrics_path' => '/metrics',
        'collectors' => [
            'http_requests_total' => [
                'counter' => [
                    'labels' => [
                        'url',
                        'code',
                    ],
                    'help' => 'Number of requests',
                ],
            ],
            'http_request_duration_seconds' => [
                'gauge' => [
                    'labels' => [
                        'url',
                    ],
                    'help' => 'Response time',
                ],
            ],
            'http_request_duration_seconds_bucket' => [
                'histogram' => [
                    'labels' => [
                        'url',
                    ],
                    'help' => 'Response times histogram',
                    'buckets' => [
                        0.1,
                        0.2,
                        0.3,
                        0.5,
                        0.7,
                        1,
                        2,
                        5,
                        10,
                        30,
                        60,
                    ],
                ],
            ],
            'data_is_fresh' => [
                'gauge' => [
                    'labels' => [
                        'app',
                        'section',
                    ],
                    'help' => 'is the data fresh',
                ],
            ],
        ],
    ]);
};
