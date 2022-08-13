<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ywh_doctrine_encryption', [
        'password' => '%env(ENCRYPTION_PASSWORD)%',
        'key' => '%env(ENCRYPTION_KEY)%',
    ]);
};
