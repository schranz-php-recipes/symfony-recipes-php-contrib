<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->add('positive_vote', '/vote-positive/{_locale}/{id}')
        ->controller('Msalsas\VotingBundle\Controller\VoteController:votePositive')
        ->methods([
            'POST',
        ]);

    $routingConfigurator->add('negative_vote', '/vote-negative/{_locale}/{id}')
        ->controller('Msalsas\VotingBundle\Controller\VoteController:voteNegative')
        ->methods([
            'POST',
        ]);
};
