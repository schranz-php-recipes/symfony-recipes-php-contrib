<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('anezi_twig.locale_extension', 'Anezi\Locale\Twig\Extension\LocaleExtension')
        ->private()
        ->arg('$locales', ['fr', 'en'])
        ->tag('twig.extension');
};
