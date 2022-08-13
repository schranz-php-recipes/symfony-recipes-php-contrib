<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('gpslab_pagination', [
        'max_navigate' => 5,
        'parameter_name' => 'page',
        'template' => 'GpsLabPaginationBundle::pagination.html.twig',
    ]);
};
