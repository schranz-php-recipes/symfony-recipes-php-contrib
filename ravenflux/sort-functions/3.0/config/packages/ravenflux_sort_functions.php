<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('ravenflux.twig.extension.sort_functions', 'RavenFlux\Twig\SortExtension')
        ->tag('twig.extension');
};
