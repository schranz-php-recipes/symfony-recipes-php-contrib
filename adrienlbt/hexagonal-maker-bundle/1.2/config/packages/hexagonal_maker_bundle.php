<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('hexagonal_maker', [
            'application_path' => 'Application',
            'domain_path' => 'Domain',
            'infrastructure_path' => 'Infrastructure',
        ]);
    }
};
