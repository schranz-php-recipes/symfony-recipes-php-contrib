<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('rpc_server', [
        'mapping' => '%kernel.root_dir%/Method',
        'cache' => null,
        'serializer' => 'rpc.server.serializer.base',
    ]);
};
