<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mailxpert_api', [
        'access_token_class' => 'App\Entity\AccessToken',
        'oauth' => [
            'client_id' => '%env(MAILXPERT_CLIENT_ID)%',
            'client_secret' => '%env(MAILXPERT_CLIENT_SECRET)%',
            'redirect_url' => 'http://example.com/mx/oauth/code',
        ],
    ]);
};
