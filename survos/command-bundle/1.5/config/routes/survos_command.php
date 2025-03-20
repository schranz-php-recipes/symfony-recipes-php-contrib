<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import([
        'path' => service('SurvosCommandBundle/src/Controller/'),
        'namespace' => 'Survos\CommandBundle\Controller',
    ], 'attribute')
        ->prefix('/admin/commands');
};
