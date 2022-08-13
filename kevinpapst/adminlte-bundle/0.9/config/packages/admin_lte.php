<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('admin_lte', [
        'options' => [
            'skin' => 'skin-blue',
            'fixed_layout' => false,
            'boxed_layout' => false,
            'collapsed_sidebar' => false,
            'mini_sidebar' => false,
        ],
        'knp_menu' => [
            'enable' => false,
        ],
        'routes' => [
            'adminlte_welcome' => 'home',
            'adminlte_login' => 'login',
            'adminlte_profile' => 'profile',
        ],
    ]);
};
