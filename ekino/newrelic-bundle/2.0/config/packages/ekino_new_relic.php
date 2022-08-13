<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ekino_new_relic', [
        'enabled' => false,
        'application_name' => 'My Symfony Application',
        'api_key' => '%env(NEWRELIC_API_KEY)%',
        'exceptions' => true,
        'deprecations' => true,
    ]);
};
