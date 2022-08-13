<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('annotation_cache', [
        'provider' => 'cache.app',
        'ignore_namespaces' => ['App\Entity'],
    ]);
};
