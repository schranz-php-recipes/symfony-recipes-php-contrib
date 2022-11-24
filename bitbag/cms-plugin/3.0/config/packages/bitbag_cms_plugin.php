<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@BitBagSyliusCmsPlugin/Resources/config/config.yml');

    $containerConfigurator->extension('twig', [
        'form_themes' => ['@BitBagSyliusCmsPlugin/Form/ckeditor_widget.html.twig'],
    ]);
};
