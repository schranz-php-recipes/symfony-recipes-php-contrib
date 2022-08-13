<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mattermost_publication', [
        'webhook_url' => '%env(MATTERMOST_WEBHOOK_URL)%',
    ]);
};
