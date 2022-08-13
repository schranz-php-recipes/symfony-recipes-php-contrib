<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('meteion', [
        'dbal_connection' => 'default',
        'rawexd_path' => '%env(METEION_RAWEXD_PATH)%',
    ]);
};
