<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('merces_lab_spreadsheet_client', [
        'google' => [
            'credentials' => '%env(GOOGLE_CREDENTIALS)%',
        ],
    ]);
};
