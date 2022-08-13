<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('maksze_telemetry', [
        'yandex_metrika' => null,
        'yandex_webmaster' => null,
        'google_search_console' => null,
        'google_analytics' => null,
    ]);
};
