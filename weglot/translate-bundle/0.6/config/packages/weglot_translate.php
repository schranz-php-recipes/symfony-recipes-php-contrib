<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('weglot_translate', [
        'api_key' => '%env(WG_API_KEY)%',
        'original_language' => 'en',
        'cache' => true,
        'destination_languages' => ['fr', 'de'],
    ]);
};
