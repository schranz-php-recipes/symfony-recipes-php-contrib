<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('cmsig_seal', [
        'schemas' => [
            'default' => [
                'dir' => '%kernel.project_dir%/config/schemas',
                'engine' => 'default',
            ],
        ],
        'engines' => [
            'default' => [
                'adapter' => '%env(resolve:SEAL_DSN)%',
            ],
        ],
    ]);
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('cmsig_seal', [
            'index_name_prefix' => 'test_%env(default::TEST_TOKEN)%',
        ]);
    }
};
