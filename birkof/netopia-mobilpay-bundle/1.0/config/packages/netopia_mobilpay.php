<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('netopia_mobilpay', [
        'payment_url' => '%env(NETOPIA_MOBILPAY_PAYMENT_URL)%',
        'public_cert' => '%env(NETOPIA_MOBILPAY_PUBLIC_CERT)%',
        'private_key' => '%env(NETOPIA_MOBILPAY_PRIVATE_KEY)%',
        'signature' => '%env(NETOPIA_MOBILPAY_SIGNATURE)%',
    ]);
};
