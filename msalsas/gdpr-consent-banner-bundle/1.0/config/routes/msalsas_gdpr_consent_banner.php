<?php

declare(strict_types=1);

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routingConfigurator): void {
    $routingConfigurator->add('accept_gdpr_consent_banner', '/accept-gdpr-consent-banner')
        ->controller('Msalsas\GdprConsentBannerBundle\Controller\MsalsasGdprConsentBannerController:acceptGdprConsentBanner')
        ->methods(['POST']);
};
