<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fresh_centrifugo', [
        'api_key' => '%env(CENTRIFUGO_API_KEY)%',
        'api_endpoint' => '%env(CENTRIFUGO_API_ENDPOINT)%',
        'secret' => '%env(CENTRIFUGO_SECRET)%',
        'jwt' => [
            'ttl' => 86400,
        ],
    ]);
};
