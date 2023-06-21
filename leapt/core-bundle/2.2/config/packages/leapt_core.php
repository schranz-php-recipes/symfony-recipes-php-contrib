<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('leapt_core', [
        'upload_dir' => '%kernel.project_dir%/public',
    ]);
};
