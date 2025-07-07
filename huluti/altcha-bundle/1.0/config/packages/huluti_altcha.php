<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('huluti_altcha', [
        'enable' => true,
        'hmacKey' => '%env(ALTCHA_SECRET)%',
    ]);
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('huluti_altcha', [
            'enable' => false,
        ]);
    }
};
