<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('mediamonks_sonata_media', [
        'filesystem_private' => 'oneup_flysystem.default_filesystem_filesystem',
        'filesystem_public' => 'oneup_flysystem.default_filesystem_filesystem',
        'redirect_url' => '%env(MEDIA_REDIRECT_URL)%',
        'model_class' => 'App\Entity\Media',
    ]);
};
