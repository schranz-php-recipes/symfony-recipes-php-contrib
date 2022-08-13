<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('adlarge_fixtures_documentation', [
        'title' => 'Fixtures documentation',
        'reloadCommands' => ['php bin/console doctrine:fixtures:load'],
    ]);
};
