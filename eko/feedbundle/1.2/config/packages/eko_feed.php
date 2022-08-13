<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('eko_feed', [
        'feeds' => [
            'article' => [
                'title' => 'My articles/posts',
                'description' => 'Latest articles',
                'link' => 'http://vincent.composieux.fr',
                'encoding' => 'utf-8',
                'author' => 'Vincent Composieux',
            ],
        ],
    ]);
};
