<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('enqueue', [
        'default' => [
            'job' => true,
        ],
    ]);

    $containerConfigurator->extension('doctrine', [
        'orm' => [
            'mappings' => [
                'EnqueueJobQueue' => [
                    'is_bundle' => false,
                    'type' => 'xml',
                    'dir' => '%kernel.project_dir%/vendor/enqueue/job-queue/Doctrine/mapping',
                    'prefix' => 'Enqueue\JobQueue\Doctrine\Entity',
                ],
            ],
        ],
    ]);
};
