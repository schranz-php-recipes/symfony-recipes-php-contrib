<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mailjet', [
        'api_key' => '%env(MAILJET_APIKEY_PUBLIC)%',
        'secret_key' => '%env(MAILJET_APIKEY_PRIVATE)%',
    ]);
};
