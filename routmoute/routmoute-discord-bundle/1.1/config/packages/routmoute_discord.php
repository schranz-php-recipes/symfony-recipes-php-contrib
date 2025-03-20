<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('routmoute_discord', [
        'oauth' => [
            'client_id' => '%env(ROUTMOUTE_DISCORD_CLIENT_ID)%',
            'client_secret' => '%env(ROUTMOUTE_DISCORD_CLIENT_SECRET)%',
            'scope' => [
                'identify',
                'email',
            ],
        ],
        'api' => [
            'bot_token' => '%env(ROUTMOUTE_DISCORD_BOT_TOKEN)%',
        ],
    ]);
};
