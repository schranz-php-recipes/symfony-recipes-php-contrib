<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dobry_programator_smartform', [
        'client_id' => '%env(SMARTFORM_CLIENT_ID)%',
    ]);
};
