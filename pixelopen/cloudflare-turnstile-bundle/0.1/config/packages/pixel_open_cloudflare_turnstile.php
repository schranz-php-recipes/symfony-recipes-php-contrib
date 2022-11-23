<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('pixel_open_cloudflare_turnstile', [
        'key' => '%env(TURNSTILE_KEY)%',
        'secret' => '%env(TURNSTILE_SECRET)%',
    ]);
};
