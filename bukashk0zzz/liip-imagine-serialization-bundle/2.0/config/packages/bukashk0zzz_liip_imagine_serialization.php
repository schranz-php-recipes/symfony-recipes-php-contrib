<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('bukashk0zzz_liip_imagine_serialization', [
        'vichUploaderSerialize' => false,
        'includeOriginal' => false,
    ]);
};
