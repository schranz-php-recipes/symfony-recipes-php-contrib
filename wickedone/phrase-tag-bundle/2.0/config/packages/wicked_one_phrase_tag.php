<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('wicked_one_phrase_tag', [
        'dsn' => '%env(PHRASE_DSN)%',
    ]);
};
