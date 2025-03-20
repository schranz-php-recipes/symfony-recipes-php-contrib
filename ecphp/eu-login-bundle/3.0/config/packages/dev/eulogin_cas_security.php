<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('security', [
        'providers' => [
            'eulogin' => [
                'id' => 'EcPhp\EuLoginBundle\Security\Core\User\EuLoginUserProvider',
            ],
        ],
    ]);
};
