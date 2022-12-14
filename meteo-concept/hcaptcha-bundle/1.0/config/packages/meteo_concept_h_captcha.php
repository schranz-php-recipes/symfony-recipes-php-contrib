<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('meteo_concept_h_captcha', [
        'hcaptcha' => [
            'site_key' => '10000000-ffff-ffff-ffff-000000000001',
            'secret' => '%env(resolve:HCAPTCHA_SECRET)%',
        ],
    ]);
};
