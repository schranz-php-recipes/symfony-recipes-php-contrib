<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('redjan_ym_fcm', [
        'firebase_api_key' => '%env(resolve:FCM_SERVER_KEY)%',
    ]);
};
