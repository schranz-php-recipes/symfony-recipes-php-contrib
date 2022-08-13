<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('tienvx_mbt', [
        'slack_hook_url' => '%env(SLACK_HOOK_URL)%',
        'slack_from' => '%env(SLACK_FROM)%',
        'slack_to' => '%env(SLACK_TO)%',
        'slack_message' => '%env(SLACK_MESSAGE)%',
        'email_from' => '%env(EMAIL_FROM)%',
        'email_to' => '%env(EMAIL_TO)%',
        'email_subject' => '%env(EMAIL_SUBJECT)%',
    ]);

    $containerConfigurator->extension('flysystem', [
        'storages' => [
            'mbt.storage' => [
                'adapter' => 'local',
                'options' => [
                    'directory' => '%kernel.project_dir%/var/storage/screenshots',
                ],
            ],
        ],
    ]);
};
