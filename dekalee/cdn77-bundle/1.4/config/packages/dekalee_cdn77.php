<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dekalee_cdn77', [
        'login' => '%env(DEKALEE_CDN77_LOGIN)%',
        'password' => '%env(DEKALEE_CDN77_PASSWORD)%',
    ]);
};
