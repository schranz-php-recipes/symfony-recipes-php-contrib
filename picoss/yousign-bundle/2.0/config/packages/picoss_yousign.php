<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('picoss_yousign', [
        'env' => '%env(YOUSIGN_ENV)%',
        'api_key' => '%env(YOUSIGN_API_KEY)%',
        'username' => '%env(YOUSIGN_USERNAME)%',
        'password' => '%env(YOUSIGN_PASSWORD)%',
    ]);
};
