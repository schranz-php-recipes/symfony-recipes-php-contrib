<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mercuryseries_inertia', [
        'ssr' => [
            'enabled' => false,
            'url' => 'http://127.0.0.1:13714/render',
        ],
        'csrf_cookie' => [
            'expire' => 0,
            'path' => '/',
            'secure' => true,
            'sameSite' => 'lax',
        ],
    ]);
};
