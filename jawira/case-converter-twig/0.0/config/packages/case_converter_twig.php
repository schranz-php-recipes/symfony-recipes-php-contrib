<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('jawira.case.converter.twig', 'Jawira\CaseConverterTwig\CaseConverterExtension')
        ->tag('twig.extension');
};
