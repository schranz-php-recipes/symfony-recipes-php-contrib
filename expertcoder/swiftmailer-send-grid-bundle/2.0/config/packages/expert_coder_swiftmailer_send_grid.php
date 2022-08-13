<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('expert_coder_swiftmailer_send_grid', [
        'api_key' => '%env(SENDGRID_API_KEY)%',
    ]);
};
