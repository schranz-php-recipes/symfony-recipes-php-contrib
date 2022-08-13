<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('nucleos_dompdf', [
        'defaults' => [
            'chroot' => '%kernel.project_dir%/public/assets',
            'logOutputFile' => '',
        ],
    ]);
};
