<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('discord_webhook', [
        'default_url' => '%env(DWH_DEFAULT_URL)%',
        'clients' => [
        ],
    ]);
};
