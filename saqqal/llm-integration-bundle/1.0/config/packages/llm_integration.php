<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('llm_integration', [
        'llm_provider' => 'api_together',
        'llm_api_key' => '%env(LLM_PROVIDER_API_KEY)%',
        'llm_model' => '%env(LLM_MODEL)%',
    ]);
};
