<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mjml', [
        'renderer' => 'binary',
        'options' => [
            'binary' => '%kernel.project_dir%/node_modules/.bin/mjml',
            'minify' => false,
        ],
    ]);
};
