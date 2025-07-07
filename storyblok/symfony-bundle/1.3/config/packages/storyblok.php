<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('storyblok', [
        'base_uri' => '%env(STORYBLOK_API_BASE_URI)%',
        'token' => '%env(STORYBLOK_API_TOKEN)%',
        'version' => '%env(STORYBLOK_VERSION)%',
    ]);
    if ($containerConfigurator->env() === 'prod') {
        $containerConfigurator->extension('storyblok', [
            'controller' => [
                'cache' => [
                    'public' => true,
                    'max_age' => 3600,
                    'smax_age' => 3600,
                    'must_revalidate' => true,
                ],
            ],
        ]);
    }
};
