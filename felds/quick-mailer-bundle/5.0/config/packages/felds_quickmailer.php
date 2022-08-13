<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('felds_quickmailer', [
        'from' => [
            'name' => 'Sender Name',
            'email' => 'sender@example.com',
        ],
        'templates' => [
            'demo' => 'path/to/template.html.twig',
        ],
    ]);
};
