<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('hboie_jasper_report', [
        'host' => 'http://localhost:8080/jasperserver',
        'username' => '%env(HBOIE_JASPER_REPORT_USERNAME)%',
        'password' => '%env(HBOIE_JASPER_REPORT_PASSWORD)%',
        'org_id' => '%env(HBOIE_JASPER_REPORT_ORGID)%',
    ]);
};
