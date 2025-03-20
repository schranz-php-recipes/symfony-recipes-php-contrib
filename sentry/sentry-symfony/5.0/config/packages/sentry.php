<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    if ($containerConfigurator->env() === 'prod') {
        $containerConfigurator->extension('sentry', [
            'dsn' => '%env(SENTRY_DSN)%',
            'options' => [
                'ignore_exceptions' => [
                    'Symfony\Component\ErrorHandler\Error\FatalError',
                    'Symfony\Component\Debug\Exception\FatalErrorException',
                ],
            ],
        ]);
    }
};
