<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('kunstmaan_dashboard', [
        'google_analytics' => [
            'api' => [
                'client_id' => '%env(GOOGLE_API_CLIENT_ID)%',
                'client_secret' => '%env(GOOGLE_API_CLIENT_SECRET)%',
                'dev_key' => '%env(GOOGLE_API_DEV_KEY)%',
                'app_name' => '%env(GOOGLE_API_APP_NAME)%',
            ],
        ],
    ]);
};
