<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('troopers_alertify', [
        'contexts' => [
            'front' => [
                'engine' => 'notie',
                'layout' => 'top',
                'translationDomain' => 'messages',
                'options' => [
                    'alertTime' => 10,
                ],
            ],
        ],
    ]);
};
