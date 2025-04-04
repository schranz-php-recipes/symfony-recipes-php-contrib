<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('twig', [
        'form_themes' => [
            '@KMSFroalaEditor/Form/froala_widget.html.twig',
        ],
    ]);

    $containerConfigurator->extension('kms_froala_editor', [
        'language' => 'en',
    ]);
};
