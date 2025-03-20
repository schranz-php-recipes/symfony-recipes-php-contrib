<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('hosting', [
        'tier' => '%env(HOSTING_TIER)%',
        'installation' => '%env(HOSTING_INSTALLATION)%',
    ]);
};
