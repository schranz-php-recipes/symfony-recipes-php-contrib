<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('simplystream_twitch_api', [
        'twitch_id' => '%env(TWITCH_ID)%',
        'twitch_secret' => '%env(TWITCH_SECRET)%',
        'redirect_uri' => '%env(TWITCH_REDIRECT_URI)%',
        'webhook' => [
            'secret' => '%env(TWITCH_WEBHOOK_SECRET)%',
        ],
    ]);
};
