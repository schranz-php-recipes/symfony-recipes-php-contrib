<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('captcha_bundle', [
        'width' => 120,
        'height' => 40,
        'length' => 6,
        'lines' => 8,
        'characters' => 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789',
        'case_sensitive' => true,
    ]);
};
