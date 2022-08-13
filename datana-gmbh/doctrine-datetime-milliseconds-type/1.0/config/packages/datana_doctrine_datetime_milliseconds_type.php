<?php

declare(strict_types=1);

use Datana\Doctrine\Type\Doctrine\DBAL\Types\Type\DateTimeMillisecondsType;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set(DateTimeMillisecondsType::class);

    $containerConfigurator->extension('doctrine', [
        'dbal' => [
            'types' => [
                'datetime' => 'Datana\Doctrine\Type\Doctrine\DBAL\Types\Type\DateTimeMillisecondsType',
            ],
        ],
    ]);
};
