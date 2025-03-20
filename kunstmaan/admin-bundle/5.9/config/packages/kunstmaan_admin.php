<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('kunstmaan_admin', [
        'multi_language' => true,
        'required_locales' => 'nl|fr|en',
        'default_locale' => 'en',
        'admin_locales' => [
            'en',
        ],
        'website_title' => 'MyProject',
        'exception_logging' => false,
    ]);
};
