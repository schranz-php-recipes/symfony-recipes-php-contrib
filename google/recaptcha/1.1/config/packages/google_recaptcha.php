<?php

declare(strict_types=1);

use ReCaptcha\RequestMethod\Curl;
use ReCaptcha\RequestMethod\CurlPost;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('ReCaptcha\ReCaptcha')
        ->arg('$secret', '%env(GOOGLE_RECAPTCHA_SECRET)%')
        ->arg('$requestMethod', service('ReCaptcha\RequestMethod'));

    $services->alias('ReCaptcha\RequestMethod', 'ReCaptcha\RequestMethod\CurlPost');

    $services->set(CurlPost::class);

    $services->set(Curl::class);
};
