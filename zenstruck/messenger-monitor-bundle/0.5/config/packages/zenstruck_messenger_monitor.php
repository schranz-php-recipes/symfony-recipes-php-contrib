<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('zenstruck_messenger_monitor', [
        'storage' => [
            'orm' => [
                'entity_class' => 'App\Entity\ProcessedMessage',
            ],
        ],
    ]);
};
