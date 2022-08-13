<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('orbitale_cms', [
        'page_class' => 'App\Entity\Page',
        'category_class' => 'App\Entity\Category',
    ]);
};
