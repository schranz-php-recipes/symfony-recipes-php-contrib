<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('karser_recaptcha3', [
        'site_key' => '%env(RECAPTCHA3_KEY)%',
        'secret_key' => '%env(RECAPTCHA3_SECRET)%',
        'score_threshold' => 0.5,
        'enabled' => true,
    ]);
};
