<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('enigma972_user', [
        'check_mail' => false,
        'reset_password_code_validity' => 14400,
        'target' => 'home',
        'no_reply_mail' => 'no-reply@mail.com',
        'not_send_welcome_mail' => true,
    ]);
};
