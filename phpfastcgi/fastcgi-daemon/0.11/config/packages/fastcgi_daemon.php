<?php

declare(strict_types=1);

use PHPFastCGI\FastCGIDaemon\Driver\DriverContainer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('App\FastCGIKernel')
        ->autowire(true);

    $services->set(DriverContainer::class);

    $services->set('PHPFastCGI\FastCGIDaemon\Command\DaemonRunCommand')
        ->args([
            service('App\FastCGIKernel'),
            service('PHPFastCGI\FastCGIDaemon\Driver\DriverContainer'),
            'fastcgi-daemon:run',
        ])
        ->tag('console.command');
};
