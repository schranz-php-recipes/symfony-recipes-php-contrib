<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('deamon_logger_extra', [
        'application' => null,
        'handlers' => 'main',
        'config' => null,
    ]);
};
