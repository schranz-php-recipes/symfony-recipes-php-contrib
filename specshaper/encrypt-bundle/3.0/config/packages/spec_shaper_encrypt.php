<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('spec_shaper_encrypt', [
        'encrypt_key' => '%env(SPEC_SHAPER_ENCRYPT_KEY)%',
    ]);
};
