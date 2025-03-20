<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('datatables', [
        'options' => [
            'lengthMenu' => [
                10,
                25,
                50,
                100,
                250,
                500,
                1000,
                2500,
            ],
            'pageLength' => 50,
            'dom' => '<\'row\' <\'col-sm-12\' tr>><\'row\' <\'col-sm-6\'l><\'col-sm-6 text-right\'pi>>',
        ],
        'template_parameters' => [
            'className' => 'table table-striped table-bordered table-hover data-table',
        ],
        'translation_domain' => 'messages',
    ]);
};
