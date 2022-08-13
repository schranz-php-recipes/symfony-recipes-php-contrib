<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('coop_tilleuls_forgot_password', [
        'password_token' => [
            'class' => 'App\Entity\PasswordToken',
            'expires_in' => '1 day',
            'user_field' => 'user',
            'serialization_groups' => [],
        ],
        'user' => [
            'class' => 'App\Entity\User',
            'email_field' => 'email',
            'password_field' => 'password',
        ],
    ]);
};
