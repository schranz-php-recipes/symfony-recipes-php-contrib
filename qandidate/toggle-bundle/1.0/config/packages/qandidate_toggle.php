<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('qandidate_toggle', [
        'persistence' => 'config',
        'toggles' => null,
    ]);
};
