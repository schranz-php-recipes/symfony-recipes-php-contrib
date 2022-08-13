<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Zendesk\API\HttpClient')
        ->args(['%env(ZENDESK_API_SUBDOMAIN)%'])
        ->call('setAuth', [
            'basic', [
                'username' => '%env(ZENDESK_API_USERNAME)%',
                'token' => '%env(ZENDESK_API_TOKEN)%',
            ], ]);
};
