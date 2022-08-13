<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('pierstoval_character_manager', [
        'character_class' => 'App\Entity\Character',
        'steps' => [
            'step_01' => [
                'action' => 'App\CharacterGenerator\Step01',
            ],
        ],
    ]);
};
