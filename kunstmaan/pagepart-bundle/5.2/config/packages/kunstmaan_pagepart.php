<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__.'/../kunstmaancms/**/*.php', null, true);

    $containerConfigurator->extension('kunstmaan_page_part', [
        'extended_pagepart_chooser' => true,
    ]);
};
