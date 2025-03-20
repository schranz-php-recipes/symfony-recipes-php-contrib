<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('survos_bunny', [
        'api_key' => '%env(BUNNY_API_KEY)%',
    ]);
};
