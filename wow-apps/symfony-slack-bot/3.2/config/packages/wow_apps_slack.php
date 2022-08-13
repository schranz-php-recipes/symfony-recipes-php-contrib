<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('wow_apps_slack', [
        'api_url' => '%env(WOW_APPS_SLACK_BOT_API_URL)%',
    ]);
};
