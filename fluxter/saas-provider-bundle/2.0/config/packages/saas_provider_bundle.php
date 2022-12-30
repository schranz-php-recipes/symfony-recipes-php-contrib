<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('saas_provider', [
        'client_entity' => 'App\Entity\Client',
        'global_url' => 'app.yourdomain.tld',
    ]);
};
