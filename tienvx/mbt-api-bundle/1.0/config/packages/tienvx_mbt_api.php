<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('tienvx_mbt_api', [
        'java_binary' => '%env(JAVA_BINARY)%',
        'plantuml_binary' => '%env(PLANTUML_BINARY)%',
        'console_binary' => '%env(CONSOLE_BINARY)%',
    ]);
};
