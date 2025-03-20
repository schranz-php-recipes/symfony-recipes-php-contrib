<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Happyr\Validator\Constraint\EntityExistValidator')
        ->args([
            service('doctrine.orm.entity_manager'),
        ])
        ->tag('validator.constraint_validator');
};
