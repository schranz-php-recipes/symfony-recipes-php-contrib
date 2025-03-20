<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('idempotency', [
        'name' => 'app',
        'methods' => [
            'POST',
            'PUT',
            'PATCH',
        ],
        'location' => 'Header-Idempotency-Key',
        'scope' => 'headers',
    ]);
};
