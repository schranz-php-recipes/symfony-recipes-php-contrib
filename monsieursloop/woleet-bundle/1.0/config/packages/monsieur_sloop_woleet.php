<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('monsieur_sloop_woleet', [
        'api_key' => 'YOUR_API_KEY',
        'api_callback_key' => 'YOUR_API_CALLBACK_KEY',
    ]);
};
