<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('msgphp_user', [
        'class_mapping' => [
            'MsgPhp\User\User' => 'App\Entity\User',
        ],
    ]);
};
