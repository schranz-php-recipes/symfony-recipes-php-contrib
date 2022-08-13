<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('reconnect_s3_bundle', [
        'bucketHost' => '%env(BUCKET_HOST)%',
        'bucketName' => '%env(BUCKET_NAME)%',
        'bucketKey' => '%env(BUCKET_KEY)%',
        'bucketSecret' => '%env(BUCKET_SECRET)%',
    ]);
};
