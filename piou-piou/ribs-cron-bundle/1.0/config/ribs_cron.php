<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set('data_directory', '%kernel.project_dir%/data/');

    $parameters->set('ribs_cron_ip_external', '%env(IP_CRON_EXTERNAL)%');

    $parameters->set('ribs_cron_ip_internal', '%env(IP_CRON_INTERNAL)%');

    $parameters->set('ribs_cron', null);
};
