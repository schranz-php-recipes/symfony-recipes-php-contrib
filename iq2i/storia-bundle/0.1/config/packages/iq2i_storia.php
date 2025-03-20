<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('iq2i_storia', [
        'default_path' => '%kernel.project_dir%/storia',
    ]);
};
