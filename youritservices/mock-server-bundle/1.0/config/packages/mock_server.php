<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('mock_server', [
            'host_url' => '%env(MOCK_SERVER_HOST)%',
            'mocks_directory' => '%kernel.project_dir%/tests/apiMocks',
        ]);
    }
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('mock_server', [
            'host_url' => '%env(MOCK_SERVER_HOST)%',
            'mocks_directory' => '%kernel.project_dir%/tests/apiMocks',
        ]);
    }
};
