<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('core23_facebook', [
        'api' => [
            'app_id' => '%env(FACEBOOK_API_ID)%',
            'app_secret' => '%env(FACEBOOK_API_SECRET)%',
        ],
    ]);
};
