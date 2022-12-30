<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import('@MonsieurBizSyliusSearchPlugin/Resources/config/config.yaml');

    $containerConfigurator->extension('monsieur_biz_sylius_search', [
        'files' => [
            'search' => '%kernel.project_dir%/vendor/monsieurbiz/sylius-search-plugin/src/Resources/config/elasticsearch/queries/search.yaml',
            'instant' => '%kernel.project_dir%/vendor/monsieurbiz/sylius-search-plugin/src/Resources/config/elasticsearch/queries/instant.yaml',
            'taxon' => '%kernel.project_dir%/vendor/monsieurbiz/sylius-search-plugin/src/Resources/config/elasticsearch/queries/taxon.yaml',
        ],
        'documentable_classes' => ['App\Entity\Product\Product'],
        'grid' => [
            'limits' => [
                'taxon' => [9, 18, 27],
                'search' => [9, 18, 27],
            ],
            'default_limit' => [
                'taxon' => 9,
                'search' => 9,
                'instant' => 10,
            ],
            'sorting' => [
                'taxon' => ['name', 'price', 'created_at'],
                'search' => ['name', 'price', 'created_at'],
            ],
            'filters' => [
                'apply_manually' => false,
                'use_main_taxon' => true,
            ],
        ],
    ]);
};
