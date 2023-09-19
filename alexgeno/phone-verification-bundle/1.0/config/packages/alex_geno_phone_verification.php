<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('alex_geno_phone_verification', [
        'storage' => [
            'driver' => 'redis',
            'redis' => [
                'connection' => 'default',
            ],
            'mongodb' => [
                'connection' => 'default',
            ],
        ],
        'sender' => [
            'transport' => 'vonage',
        ],
        'manager' => [
            'otp' => [
                'length' => '%env(int:PHONE_VERIFICATION_OTP_LENGTH)%',
            ],
            'rate_limits' => [
                'initiate' => [
                    'period_secs' => '%env(int:PHONE_VERIFICATION_RATE_LIMIT_INITIATE_PERIOD_SECS)%',
                    'count' => '%env(int:PHONE_VERIFICATION_RATE_LIMIT_INITIATE_COUNT)%',
                ],
                'complete' => [
                    'period_secs' => '%env(int:PHONE_VERIFICATION_RATE_LIMIT_COMPLETE_PERIOD_SECS)%',
                    'count' => '%env(int:PHONE_VERIFICATION_RATE_LIMIT_COMPLETE_COUNT)%',
                ],
            ],
        ],
    ]);
};
