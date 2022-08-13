<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('nucleos_user', [
        'firewall_name' => 'main',
        'from_email' => '%env(MAIL_SENDER)%',
        'user_class' => 'App\Entity\User\User',
        'group' => [
            'group_class' => 'App\Entity\User\Group',
        ],
    ]);
};
