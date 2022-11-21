<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ajardin_blizzard_sdk', [
        'blizzard' => [
            'client_id' => '%env(BLIZZARD_CLIENT_ID)%',
            'client_secret' => '%env(BLIZZARD_CLIENT_SECRET)%',
        ],
    ]);
};
