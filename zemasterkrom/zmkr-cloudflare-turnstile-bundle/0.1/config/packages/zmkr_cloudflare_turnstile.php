<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('zmkr_cloudflare_turnstile', [
        'captcha' => [
            'sitekey' => '%env(CLOUDFLARE_TURNSTILE_SITEKEY)%',
            'secret_key' => '%env(CLOUDFLARE_TURNSTILE_SECRET_KEY)%',
        ],
    ]);
};
