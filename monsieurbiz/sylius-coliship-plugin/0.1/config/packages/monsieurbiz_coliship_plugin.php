<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@MonsieurBizSyliusColishipPlugin/Resources/config/monsieurbiz/settings.yaml');

    $containerConfigurator->import('@MonsieurBizSyliusColishipPlugin/Resources/config/sylius/grid.yaml');

    $containerConfigurator->import('@MonsieurBizSyliusColishipPlugin/Resources/config/sylius/ui.yaml');
};
