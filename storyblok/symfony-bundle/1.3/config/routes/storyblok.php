<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@StoryblokBundle/config/routes/webhook.php');

    $routingConfigurator->import('@StoryblokBundle/config/routes/content_type.php');
};
