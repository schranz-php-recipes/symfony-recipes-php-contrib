<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('kynno_smartbots', [
        'api_key' => '%env(SMARTBOTS_API_KEY)%',
        'bots' => [
            'Kynno' => [
                'name' => 'KynnoSystem Resident',
                'botSecret' => '%env(BOT_KYNNO_SECRET)%',
            ],
        ],
    ]);
};
