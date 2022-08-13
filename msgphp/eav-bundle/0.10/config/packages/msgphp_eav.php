<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('msgphp_eav', [
        'class_mapping' => [
            'MsgPhp\Eav\Attribute' => 'App\Entity\Attribute',
            'MsgPhp\Eav\AttributeValue' => 'App\Entity\AttributeValue',
        ],
    ]);
};
