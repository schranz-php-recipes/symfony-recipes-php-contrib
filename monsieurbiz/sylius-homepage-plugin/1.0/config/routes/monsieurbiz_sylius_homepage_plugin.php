<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->import('@MonsieurBizSyliusHomepagePlugin/Resources/config/routes/admin.yaml')
        ->prefix('/%sylius_admin.path_name%');

    $routingConfigurator->add('monsieurbiz_sylius_homepage_homepage', '/{_locale}/')
        ->controller('monsieurbiz_homepage.controller.homepage:indexAction')
        ->defaults([
            '_sylius' => [
                'template' => '@MonsieurBizSyliusHomepagePlugin/Homepage/index.html.twig',
                'repository' => [
                    'method' => 'findOneByChannelAndLocale',
                    'arguments' => ['expr:service(\'sylius.context.channel\').getChannel()', 'expr:service(\'sylius.context.locale\').getLocaleCode()'],
                ],
            ],
        ])
        ->methods(['GET'])
        ->requirements([
            '_locale' => '^[a-z]{2}(?:_[A-Z]{2})?$',
        ]);
};
