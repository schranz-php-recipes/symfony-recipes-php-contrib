<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('oka_doctrine_encrypt', [
        'secret' => '%env(OKA_DOCTRINE_ENCRYPT_SECRET)%',
    ]);
};
