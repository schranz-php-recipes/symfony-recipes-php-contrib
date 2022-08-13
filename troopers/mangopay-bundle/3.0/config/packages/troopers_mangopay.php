<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('troopers_mangopay', [
        'client_id' => '%env(TROOPERS_MANGOPAY_CLIENT_ID)%',
        'client_password' => '%env(TROOPERS_MANGOPAY_CLIENT_PASSWORD)%',
        'base_url' => '%env(TROOPERS_MANGOPAY_BASE_URL)%',
    ]);
};
