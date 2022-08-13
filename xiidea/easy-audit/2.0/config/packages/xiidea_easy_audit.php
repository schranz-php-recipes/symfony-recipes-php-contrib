<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('xiidea_easy_audit', [
        'audit_log_class' => 'Xiidea\EasyAuditBundle\Model\BaseAuditLog',
        'default_logger' => false,
        'user_property' => null,
    ]);
};
