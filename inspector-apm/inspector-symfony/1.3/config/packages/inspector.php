<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('inspector', [
        'ingestion_key' => '%env(INSPECTOR_INGESTION_KEY)%',
        'enabled' => true,
        'transport' => 'async',
        'ignore_routes' => [
            '/_wdt*',
            '/_profiler*',
        ],
        'ignore_commands' => [
            'messenger:consume',
            'assets:install',
            'cache:clear',
            'doctrine:migrations:migrate',
            'schedule:run',
            'debug:autowiring',
            'debug:config',
            'debug:container',
            'debug:event-dispatcher',
            'debug:form',
            'debug:router',
            'debug:translation',
            'debug:twig',
            'debug:validator',
            'make:auth',
            'make:command',
            'make:controller',
            'make:crud',
            'make:docker:database',
            'make:entity',
            'make:fixtures',
            'make:form',
            'make:functional-test',
            'make:message',
            'make:messenger-middleware',
            'make:migration',
            'make:registration-form',
            'make:reset-password',
            'make:serializer:encoder',
            'make:serializer:normalizer',
            'make:subscriber',
            'make:test',
            'make:twig-extension',
            'make:unit-test',
            'make:user',
            'make:validator',
            'make:voter',
        ],
    ]);
};
