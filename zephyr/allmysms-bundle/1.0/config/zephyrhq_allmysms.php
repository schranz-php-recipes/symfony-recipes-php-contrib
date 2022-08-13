<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('zephyrhq_allmysms', [
        'api_login' => '%env(ALLMYSMS_LOGIN)%',
        'api_key' => '%env(ALLMYSMS_KEY)%',
        'simulate' => '%env(ALLMYSMS_SIMULATE)%',
        'simple_sms' => false,
    ]);
};
