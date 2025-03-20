<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('joli_typo', [
        'presets' => [
            'fr' => [
                'fixers' => [
                    'Ellipsis',
                    'Dimension',
                    'Dash',
                    'SmartQuotes',
                    'FrenchNoBreakSpace',
                    'CurlyQuote',
                    'Trademark',
                ],
                'locale' => 'fr_FR',
            ],
            'en' => [
                'fixers' => [
                    'Ellipsis',
                    'Dimension',
                    'Dash',
                    'SmartQuotes',
                    'CurlyQuote',
                    'Trademark',
                ],
                'locale' => 'en_GB',
            ],
        ],
    ]);
};
