<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('transip_api', [
        'login' => '%env(VERSCHOOF_TRANSIP_API_LOGIN)%',
        'private_key' => '%env(VERSCHOOF_TRANSIP_API_PRIVATE_KEY)%',
        'read_only' => true,
    ]);
};
