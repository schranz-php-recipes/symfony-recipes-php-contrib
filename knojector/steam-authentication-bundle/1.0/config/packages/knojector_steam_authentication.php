<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('knojector_steam_authentication', [
        'login_success_redirect' => '',
        'login_failure_redirect' => '',
    ]);
};
