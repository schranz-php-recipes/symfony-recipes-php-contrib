<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('tdbm', [
        'bean_namespace' => 'App\Beans',
        'dao_namespace' => 'App\Daos',
    ]);
};
