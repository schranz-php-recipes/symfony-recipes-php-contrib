<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('otobul_epaybg', [
        'min' => '%env(OTOBUL_EPAYBG_MIN)%',
        'secret' => '%env(OTOBUL_EPAYBG_SECRET)%',
        'isDemo' => '%env(bool:OTOBUL_EPAYBG_IS_DEMO)%',
    ]);
};
