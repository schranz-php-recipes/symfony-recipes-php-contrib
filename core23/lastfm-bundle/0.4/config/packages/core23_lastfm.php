<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('core23_lastfm', [
        'api' => [
            'app_id' => '%env(LASTFM_API_ID)%',
            'shared_secret' => '%env(LASTFM_API_SECRET)%',
        ],
    ]);
};
