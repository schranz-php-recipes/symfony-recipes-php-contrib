<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('storyblok', [
        'space_id' => '%env(int:STORYBLOK_SPACE_ID)%',
        'management_token' => '%env(STORYBLOK_MANAGEMENT_TOKEN)%',
        'content_token' => '%env(STORYBLOK_CONTENT_TOKEN)%',
    ]);
};
