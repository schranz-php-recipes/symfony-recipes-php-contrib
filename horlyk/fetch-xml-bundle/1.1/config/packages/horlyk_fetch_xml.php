<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('horlyk_fetch_xml', [
        'use_pager' => false,
        'items_per_page' => 10,
        'attribute_aliases_as_names' => true,
        'attribute_alias_prefix' => 'qb_',
    ]);
};
