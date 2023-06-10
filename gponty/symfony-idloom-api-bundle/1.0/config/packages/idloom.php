<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('id_loom', [
        'idloom_url' => '%env(resolve:IDLOOM_URL)%',
    ]);
};
