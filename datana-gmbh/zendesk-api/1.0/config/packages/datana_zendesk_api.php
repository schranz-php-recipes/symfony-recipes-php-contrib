<?php

declare(strict_types=1);

use Datana\Zendesk\Api\AttachmentsApi;
use Datana\Zendesk\Api\NullAttachmentsApi;
use Datana\Zendesk\Api\NullTicketsApi;
use Datana\Zendesk\Api\TicketsApi;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set(TicketsApi::class);

    $services->set(NullTicketsApi::class);

    $services->alias('Datana\Zendesk\Api\TicketsApiInterface', 'Datana\Zendesk\Api\TicketsApi');

    $services->set(AttachmentsApi::class);

    $services->set(NullAttachmentsApi::class);

    $services->alias('Datana\Zendesk\Api\AttachmentsApiInterface', 'Datana\Zendesk\Api\AttachmentsApi');
    if ($containerConfigurator->env() === 'prod') {
        $containerConfigurator->extension('services', [
            'Datana\Zendesk\Api\TicketsApiInterface' => service('Datana\Zendesk\Api\TicketsApi'),
            'Datana\Zendesk\Api\AttachmentsApiInterface' => service('Datana\Zendesk\Api\AttachmentsApi'),
        ]);
    }
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('services', [
            'Datana\Zendesk\Api\TicketsApiInterface' => service('Datana\Zendesk\Api\NullTicketsApi'),
            'Datana\Zendesk\Api\AttachmentsApiInterface' => service('Datana\Zendesk\Api\NullAttachmentsApi'),
        ]);
    }
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('services', [
            'Datana\Zendesk\Api\TicketsApiInterface' => service('Datana\Zendesk\Api\NullTicketsApi'),
            'Datana\Zendesk\Api\AttachmentsApiInterface' => service('Datana\Zendesk\Api\NullAttachmentsApi'),
        ]);
    }
};
