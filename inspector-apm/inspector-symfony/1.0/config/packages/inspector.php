<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('inspector', [
        'ingestion_key' => '%env(INSPECTOR_INGESTION_KEY)%',
        'ignore_routes' => [
            '_wdt',
            '_profiler',
            '_profiler_home',
            '_profiler_search',
            '_profiler_search_bar',
            '_profiler_phpinfo',
            '_profiler_search_results',
            '_profiler_open_file',
            '_profiler_router',
            '_profiler_exception',
            '_profiler_exception_css',
        ],
        'ignore_commands' => [
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
