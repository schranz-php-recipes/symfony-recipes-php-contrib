<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('connectholland_timechimp', [
        'api_key' => '%env(string:TIMECHIMP_ACCESS_TOKEN)%',
    ]);
};
