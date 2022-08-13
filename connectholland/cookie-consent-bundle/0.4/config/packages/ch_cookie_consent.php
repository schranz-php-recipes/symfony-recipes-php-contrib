<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('ch_cookie_consent', [
        'categories' => ['analytics', 'tracking', 'social_media', 'marketing'],
    ]);
};
