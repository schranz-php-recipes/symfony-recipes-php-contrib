<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ewz_recaptcha', [
        'public_key' => '%env(EWZ_RECAPTCHA_SITE_KEY)%',
        'private_key' => '%env(EWZ_RECAPTCHA_SECRET)%',
    ]);
};
