<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('Datana\Bridge\Symfony\Mailer\Sendgrid\Transport\SendgridDynamicTemplateTransportFactory')
        ->parent('mailer.transport_factory.abstract')
        ->tag('mailer.transport_factory')
        ->autowire(true);
};
