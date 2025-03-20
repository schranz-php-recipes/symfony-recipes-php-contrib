<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Mixpanel', 'Mixpanel')
        ->factory([
            'Mixpanel',
            'getInstance',
        ])
        ->args([
            '%env(MIXPANEL_PROJECT_TOKEN)%',
        ]);
};
