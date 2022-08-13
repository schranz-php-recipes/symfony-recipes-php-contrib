<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('recaptcha', [
        'google_site_key' => '%env(GOOGLE_RECAPTCHA_SITE_KEY)%',
        'google_secret_key' => '%env(GOOGLE_RECAPTCHA_SECRET_KEY)%',
    ]);
};
