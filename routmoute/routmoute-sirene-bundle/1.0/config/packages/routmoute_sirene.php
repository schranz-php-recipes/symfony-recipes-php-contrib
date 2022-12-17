<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('routmoute_sirene', [
        'consumer_key' => '%env(ROUTMOUTE_SIRENE_CONSUMER_KEY)%',
        'consumer_secret' => '%env(ROUTMOUTE_SIRENE_CONSUMER_SECRET)%',
    ]);
};
