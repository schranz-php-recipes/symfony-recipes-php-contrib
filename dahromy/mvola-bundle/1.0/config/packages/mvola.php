<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mvola', [
        'environment' => '%env(MVOLA_ENVIRONMENT)%',
        'merchant_number' => '%env(MVOLA_MERCHANT_NUMBER)%',
        'company_name' => '%env(MVOLA_COMPANY_NAME)%',
        'consumer_key' => '%env(MVOLA_CONSUMER_KEY)%',
        'consumer_secret' => '%env(MVOLA_CONSUMER_SECRET)%',
        'auth_url' => '%env(MVOLA_AUTH_URL)%',
        'max_retries' => 3,
        'retry_delay' => 1000,
        'cache_ttl' => 3600,
    ]);
};
