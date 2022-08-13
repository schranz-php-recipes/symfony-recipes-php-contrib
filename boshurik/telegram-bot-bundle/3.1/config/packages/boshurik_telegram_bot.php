<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('boshurik_telegram_bot', [
        'api' => [
            'token' => '%env(TELEGRAM_BOT_TOKEN)%',
        ],
    ]);
};
