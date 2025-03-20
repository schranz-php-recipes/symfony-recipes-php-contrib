<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('tiriel_firestore_odm', [
        'project_name' => 'my-project',
        'service_account' => '%kernel.project_dir%/config/secrets/my_project.json',
    ]);
};
