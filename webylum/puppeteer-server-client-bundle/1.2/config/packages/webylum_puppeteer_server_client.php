<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('webylum_puppeteer_server_client', [
        'server' => [
            'url' => '%env(PUPPETEER_SERVER_URL)%',
        ],
        'public_dir' => '%kernel.project_dir%/public',
    ]);
};
