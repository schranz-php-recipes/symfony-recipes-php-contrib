<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('knp_snappy', [
        'pdf' => [
            'enabled' => true,
            'binary' => '%env(WKHTMLTOPDF_PATH)%',
            'options' => [
            ],
        ],
        'image' => [
            'enabled' => true,
            'binary' => '%env(WKHTMLTOIMAGE_PATH)%',
            'options' => [
            ],
        ],
    ]);
};
