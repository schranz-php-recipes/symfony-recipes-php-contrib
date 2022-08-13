<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mobizel_markdown_docs', [
        'docs_dir' => '%kernel.project_dir%/docs',
    ]);
};
