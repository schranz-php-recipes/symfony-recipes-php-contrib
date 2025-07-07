<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('contao', [
        'preview_script' => '/preview.php',
        'upload_path' => 'files',
        'csrf_token_name' => 'contao_csrf_token',
        'pretty_error_screens' => true,
    ]);
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('contao', [
            'pretty_error_screens' => false,
        ]);
    }
};
