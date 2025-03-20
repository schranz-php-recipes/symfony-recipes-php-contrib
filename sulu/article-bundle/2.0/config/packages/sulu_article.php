<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('sulu_article', [
        'index_name' => '%env(resolve:ELASTICSEARCH_INDEX)%',
        'hosts' => [
            '%env(resolve:ELASTICSEARCH_HOST)%',
        ],
        'types' => [
            'article' => [
                'translation_key' => 'sulu_article.article',
            ],
        ],
    ]);

    $containerConfigurator->extension('sulu_route', [
        'mappings' => [
            'Sulu\Bundle\ArticleBundle\Document\ArticleDocument' => [
                'generator' => 'schema',
                'options' => [
                    'route_schema' => '/articles/{object.getTitle()}',
                ],
            ],
            'Sulu\Bundle\ArticleBundle\Document\ArticlePageDocument' => [
                'generator' => 'article_page',
                'options' => [
                    'route_schema' => '{translator.trans("page")}-{object.getPageNumber()}',
                    'parent' => '{object.getParent().getRoutePath()}',
                ],
            ],
        ],
    ]);

    $containerConfigurator->extension('ongr_elasticsearch', [
        'analysis' => [
            'tokenizer' => [
                'pathTokenizer' => [
                    'type' => 'path_hierarchy',
                ],
            ],
            'analyzer' => [
                'pathAnalyzer' => [
                    'tokenizer' => 'pathTokenizer',
                ],
            ],
        ],
    ]);
};
