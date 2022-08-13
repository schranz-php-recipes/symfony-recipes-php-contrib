<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ckrack_optimus', [
        'prime' => '%env(int:OPTIMUS_PRIME)%',
        'inverse' => '%env(int:OPTIMUS_INVERSE)%',
        'random' => '%env(int:OPTIMUS_RANDOM)%',
        'passthrough' => true,
    ]);
};
