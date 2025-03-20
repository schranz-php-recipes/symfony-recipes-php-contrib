<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('baldinof_road_runner', [
        'kernel_reboot' => [
            'strategy' => 'on_exception',
            'allowed_exceptions' => [
                'Symfony\Component\HttpKernel\Exception\HttpExceptionInterface',
                'Symfony\Component\Serializer\Exception\ExceptionInterface',
                'Symfony\Contracts\HttpClient\Exception\ExceptionInterface',
            ],
        ],
        'metrics' => [
            'enabled' => false,
        ],
    ]);
};
