<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Happyr\LinkedIn\LinkedIn', 'Happyr\LinkedIn\LinkedIn')
        ->args([
            '%env(LINKEDIN_API_KEY)%',
            '%env(LINKEDIN_API_SECRET)%',
        ]);
};
