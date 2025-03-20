<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dahromy_glide', [
        'source' => '%kernel.project_dir%/public/uploads',
        'cache' => '%kernel.project_dir%/var/cache/glide',
        'signature_key' => '%env(GLIDE_SIGNATURE_KEY)%',
    ]);
};
