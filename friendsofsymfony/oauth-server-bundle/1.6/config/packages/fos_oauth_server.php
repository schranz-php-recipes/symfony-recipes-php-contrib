<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fos_oauth_server', [
        'db_driver' => 'orm',
        'client_class' => 'App\Entity\Client',
        'access_token_class' => 'App\Entity\AccessToken',
        'refresh_token_class' => 'App\Entity\RefreshToken',
        'auth_code_class' => 'App\Entity\AuthCode',
    ]);
};
