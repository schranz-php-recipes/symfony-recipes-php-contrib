<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('meritoo_common', [
        'form' => [
            'novalidate' => '%env(bool:MERITOO_FORM_NOVALIDATE)%',
        ],
    ]);
};
