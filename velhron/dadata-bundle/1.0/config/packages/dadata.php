<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('velhron_dadata', [
        'token' => '%env(DADATA_TOKEN)%',
        'secret' => '%env(DADATA_SECRET)%',
    ]);
};
