<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('fitz', [
        'composer_path' => '/usr/local/bin/composer',
        'queue_file_path' => '%kernel.project_dir%/vendor/hugosoltys/fitz-bundle',
    ]);
};
