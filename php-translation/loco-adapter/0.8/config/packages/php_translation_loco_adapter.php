<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('translation_adapter_loco', [
        'index_parameter' => 'id',
        'projects' => [
            'my_project' => [
                'api_key' => '%env(LOCO_PROJECT_API_KEY)%',
                'domains' => [
                    'messages',
                ],
            ],
        ],
    ]);
};
