<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('beelab_recaptcha2', [
        'site_key' => '%env(APP_RECAPTCHA_SITE_KEY)%',
        'secret' => '%env(APP_RECAPTCHA_SECRET)%',
    ]);
};
