<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('msalsas_voting', [
        'user_provider' => 'App\Entity\User',
        'negative_reasons' => [
            'msalsas_voting.negative_reasons.irrelevant',
            'msalsas_voting.negative_reasons.old',
            'msalsas_voting.negative_reasons.tiredness',
            'msalsas_voting.negative_reasons.sensationalist',
            'msalsas_voting.negative_reasons.spam',
            'msalsas_voting.negative_reasons.duplicated',
            'msalsas_voting.negative_reasons.microblogging',
            'msalsas_voting.negative_reasons.erroneous',
            'msalsas_voting.negative_reasons.plagiarism',
        ],
        'anonymous_percent_allowed' => 50,
        'anonymous_min_allowed' => 2,
    ]);
};
