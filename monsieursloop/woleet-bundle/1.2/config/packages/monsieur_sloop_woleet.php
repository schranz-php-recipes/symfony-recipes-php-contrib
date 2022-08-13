<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('monsieur_sloop_woleet', [
        'api_token' => '%env(WOLEET_API_TOKEN)%',
        'callback_secret' => '%env(WOLEET_CALLBACK_SECRET)%',
    ]);
};
