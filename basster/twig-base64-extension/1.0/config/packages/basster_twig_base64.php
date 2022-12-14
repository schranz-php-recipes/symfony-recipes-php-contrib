<?php

declare(strict_types=1);

use Basster\TwigBase64\Converter\ImageToBase64Converter;
use Basster\TwigBase64\Twig\Base64ImageExtension;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure();

    $services->set(ImageToBase64Converter::class);

    $services->set(Base64ImageExtension::class);

    $services->alias('Basster\TwigBase64\Converter\FileConverterInterface', 'Basster\TwigBase64\Converter\ImageToBase64Converter');
};
