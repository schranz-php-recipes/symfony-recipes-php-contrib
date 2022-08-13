<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('loophp\RepositoryMonadicHelper\MonadicRepositoryFactory')
        ->autowire(true)
        ->autoconfigure(true);

    $services->alias('loophp\RepositoryMonadicHelper\MonadicRepositoryFactoryInterface', 'loophp\RepositoryMonadicHelper\MonadicRepositoryFactory');
};
