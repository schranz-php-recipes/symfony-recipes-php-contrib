<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('omnipay', [
        'success_url' => '/profile/history_orders',
        'fail_url' => '/',
        'return_url' => '/omnipay_return',
        'notify_url' => '/omnipay_notify',
        'cancel_url' => '/omnipay_cancel',
        'data_keys' => [
            'paymentId' => ['orderNumber'],
            'customerEmail' => ['customerNumber'],
        ],
        'gateways' => null,
    ]);
};
