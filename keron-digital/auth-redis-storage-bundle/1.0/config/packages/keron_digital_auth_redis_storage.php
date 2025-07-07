<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('keron_digital_auth_redis_storage', [
        'redis_client_service_id' => 'CHANGE_ME_redis_service_id',
    ]);
};
