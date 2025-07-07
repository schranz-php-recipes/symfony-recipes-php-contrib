<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('psys_order_invoice', [
        'pdf_exporter' => [
            'engine' => 'mpdf',
            'template_path' => 'invoice/oi_default.html.twig',
        ],
    ]);
};
