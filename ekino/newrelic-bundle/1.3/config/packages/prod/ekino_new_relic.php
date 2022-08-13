<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ekino_new_relic', [
        'enabled' => true,
        'api_key' => '%env(NEWRELIC_API_KEY)%',
        'log_exceptions' => true,
    ]);
};
