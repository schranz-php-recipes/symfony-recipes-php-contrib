<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('coop_tilleuls_url_signer', [
        'signature_key' => '%env(string:SIGNATURE_KEY)%',
    ]);
};
