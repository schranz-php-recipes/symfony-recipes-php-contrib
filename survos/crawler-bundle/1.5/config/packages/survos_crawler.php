<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('survos_crawler', [
        'user_class' => 'App\Entity\User',
        'users' => ['user@user.com'],
        'max_depth' => 3,
        'routes_to_ignore' => ['app_logout'],
    ]);
};
