<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@PayPlugSyliusPayPlugPlugin/Resources/config/config.yml');

    $containerConfigurator->import('@PayPlugSyliusPayPlugPlugin/Resources/config/services.xml');
};
