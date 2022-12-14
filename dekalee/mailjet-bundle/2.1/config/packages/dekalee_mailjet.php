<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('dekalee_mailjet', [
        'api_key' => '%env(DEKALEE_MAILJET_API_KEY)%',
        'secret_key' => '%env(DEKALEE_MAILJET_SECRET_KEY)%',
        'base_template_id' => '%env(DEKALEE_MAILJET_BASE_TEMPLATE_ID)%',
        'reporting_email' => '%env(DEKALEE_MAILJET_EMAIL_REPORTING)%',
        'force_deliver' => false,
    ]);
};
