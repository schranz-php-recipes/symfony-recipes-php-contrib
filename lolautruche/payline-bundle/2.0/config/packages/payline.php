<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('lolautruche_payline', [
        'merchant_id' => '%env(PAYLINE_MERCHANT_ID)%',
        'access_key' => '%env(PAYLINE_ACCESS_KEY)%',
        'contract_number' => '%env(PAYLINE_CONTRACT_NUMBER)%',
        'environment' => '%env(PAYLINE_ENVIRONMENT)%',
        'default_currency' => '€',
        'default_confirmation_route' => 'route_name_for_confirmation_page',
        'default_error_route' => 'route_name_for_error_page',
    ]);
};
