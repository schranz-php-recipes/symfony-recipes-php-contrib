<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('msalsas_gdpr_consent_banner', [
        'fade_time' => 2,
        'time_to_expire' => '30 days',
    ]);
};
