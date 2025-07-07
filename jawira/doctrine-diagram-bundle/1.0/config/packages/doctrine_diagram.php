<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('doctrine_diagram', [
            'er' => [
                'filename' => '%kernel.project_dir%/er',
                'size' => 'midi',
            ],
            'class' => [
                'filename' => '%kernel.project_dir%/class',
                'size' => 'midi',
            ],
            'convert' => [
                'format' => 'svg',
                'converter' => 'auto',
            ],
        ]);
    }
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('doctrine_diagram', [
            'er' => [
                'filename' => '%kernel.project_dir%/er',
                'size' => 'midi',
            ],
            'class' => [
                'filename' => '%kernel.project_dir%/class',
                'size' => 'midi',
            ],
            'convert' => [
                'format' => 'svg',
                'converter' => 'auto',
            ],
        ]);
    }
};
