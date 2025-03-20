<?php

declare(strict_types=1);

use Datana\Iusta\Api\CaseApi;
use Datana\Iusta\Api\DatasetApi;
use Datana\Iusta\Api\ImportApi;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set('Datana\Iusta\Api\IustaClient')
        ->args([
            '%env(IUSTA_API_BASE_URI)%',
            '%env(IUSTA_API_TOKEN)%',
        ]);

    $services->set(CaseApi::class);

    $services->alias('Datana\Iusta\Api\CaseApiInterface', 'Datana\Iusta\Api\CaseApi');

    $services->set(DatasetApi::class);

    $services->alias('Datana\Iusta\Api\DatasetApiInterface', 'Datana\Iusta\Api\DatasetApi');

    $services->set(ImportApi::class);

    $services->alias('Datana\Iusta\Api\ImportApiInterface', 'Datana\Iusta\Api\ImportApi');
};
