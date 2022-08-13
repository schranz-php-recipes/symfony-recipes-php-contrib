<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('comsave_salesforce_outbound_message', [
        'wsdl_directory' => 'src/Company/Resources/wsdl',
        'document_paths' => [
            'Account' => [
                'path' => 'src/Company/Document/Account',
            ],
            'Product2' => [
                'path' => 'src/Company/Document/Product2',
            ],
        ],
    ]);
};
