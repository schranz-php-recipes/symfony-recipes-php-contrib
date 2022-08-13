<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('xiidea_easy_audit', [
        'entity_class' => 'Xiidea\EasyAuditBundle\Entity\BaseAuditLog',
        'default_logger' => false,
        'user_property' => null,
    ]);
};
