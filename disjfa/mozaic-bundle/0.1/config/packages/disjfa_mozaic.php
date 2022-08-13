<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('disjfa_mozaic', [
        'unsplash' => [
            'application_id' => '%env(resolve:UNSPLASH_APPLICATION_ID)%',
            'secret' => '%env(resolve:UNSPLASH_APPLICATION_SECRET)%',
        ],
    ]);
};
