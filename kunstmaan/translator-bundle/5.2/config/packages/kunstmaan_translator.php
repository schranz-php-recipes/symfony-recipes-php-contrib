<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('kunstmaan_translator', [
        'enabled' => true,
        'managed_locales' => ['nl', 'en', 'de', 'fr'],
    ]);
};
