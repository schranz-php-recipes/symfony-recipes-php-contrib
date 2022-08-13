<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('isaac_gaze_symfony', [
        'publisher' => [
            'gazehub_url' => '%env(GAZEHUB_URL)%',
            'private_key_content' => '%env(GAZE_PRIVATE_KEY_CONTENTS)%',
        ],
    ]);
};
