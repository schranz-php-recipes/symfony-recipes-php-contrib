<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dekalee_enom', [
        'uid' => '%env(ENOM_UID)%',
        'password' => '%env(ENOM_PASSWORD)%',
        'base_url' => '%env(ENOM_BASE_URL)%',
    ]);
};
