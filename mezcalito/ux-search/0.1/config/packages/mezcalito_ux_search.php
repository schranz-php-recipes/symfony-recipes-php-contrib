<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mezcalito_ux_search', [
        'adapters' => [
            'default' => '%env(MEZCALITO_UX_SEARCH_DEFAULT_DSN)%',
        ],
    ]);
};
