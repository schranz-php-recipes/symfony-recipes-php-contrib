<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ihsan_ratchet', [
        'web_socket_port' => '%env(WEB_SOCKET_PORT)%',
    ]);
};
