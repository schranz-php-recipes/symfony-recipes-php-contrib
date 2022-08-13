<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('artox_lab_clarc', [
        'api' => [
            'serializer' => [
                'class' => 'ArtoxLab\Bundle\ClarcBundle\Core\Interfaces\UI\API\Transformers\Serializers\NullObjectArraySerializer',
            ],
        ],
    ]);
};
