<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('hwi_oauth', [
        'firewall_names' => ['main'],
        'resource_owners' => [
            'facebook' => [
                'type' => 'facebook',
                'client_id' => '%env(FB_ID)%',
                'client_secret' => '%env(FB_SECRET)%',
                'scope' => 'email',
                'options' => [
                    'display' => 'popup',
                    'csrf' => true,
                ],
            ],
        ],
    ]);
};
