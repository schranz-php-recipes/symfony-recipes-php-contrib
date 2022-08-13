<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('comments', [
        'comment_class' => 'App\MainBundle\Document\Comment',
        'status_default' => 'pending',
    ]);
};
