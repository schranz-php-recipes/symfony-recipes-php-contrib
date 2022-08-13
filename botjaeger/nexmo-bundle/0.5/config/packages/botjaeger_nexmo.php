<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('botjaeger_nexmo', [
        'api_key' => '%env(BOTJAEGER_NEXMO_API_KEY)%',
        'api_secret' => '%env(BOTJAEGER_NEXMO_API_SECRET)%',
        'api_brand' => '%env(BOTJAEGER_NEXMO_API_BRAND)%',
    ]);
};
