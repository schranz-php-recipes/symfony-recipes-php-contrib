<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('nzo_encryptor', [
        'secret_key' => '%env(NZO_ENCRYPTOR_SECRET)%',
        'secret_iv' => '%env(NZO_ENCRYPTOR_IV)%',
    ]);
};
