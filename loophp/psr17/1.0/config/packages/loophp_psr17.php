<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('loophp\psr17\Psr17')
        ->autowire(true)
        ->autoconfigure(true);

    $services->alias('loophp\psr17\Psr17Interface', 'loophp\psr17\Psr17');
};
