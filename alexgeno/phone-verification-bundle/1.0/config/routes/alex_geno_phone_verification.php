<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->add('phone_verification_initiate', '/phone-verification/initiate/{to}')
        ->controller('AlexGeno\PhoneVerificationBundle\Controller\PhoneVerificationController::initiate')
        ->methods([
            'POST',
        ]);

    $routingConfigurator->add('phone_verification_complete', '/phone-verification/complete/{to}/{otp}')
        ->controller('AlexGeno\PhoneVerificationBundle\Controller\PhoneVerificationController::complete')
        ->methods([
            'POST',
        ]);
};
