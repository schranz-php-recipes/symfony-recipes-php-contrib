<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mael_recaptcha', [
        'key' => '%env(resolve:MAEL_RECAPTCHA_KEY)%',
        'secret' => '%env(resolve:MAEL_RECAPTCHA_SECRET)%',
    ]);
};
