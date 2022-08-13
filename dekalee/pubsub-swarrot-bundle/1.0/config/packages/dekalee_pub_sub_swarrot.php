<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dekalee_pub_sub_swarrot', [
        'key_file_path' => '%env(DEKALEE_PUBSUB_SWARROT_KEY_FILE_PATH)%',
    ]);
};
