<?php

declare(strict_types=1);

use PhpLlm\LlmChain\Chain\ToolBox\Tool\Clock;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire()
        ->autoconfigure();

    $services->set(Clock::class);

    $containerConfigurator->extension('llm_chain', [
        'platform' => [
            'openai' => [
                'api_key' => '%env(OPENAI_API_KEY)%',
            ],
        ],
        'chain' => [
            'default' => [
                'platform' => 'llm_chain.platform.openai',
                'model' => [
                    'name' => 'GPT',
                    'version' => 'gpt-4o-mini',
                ],
                'system_prompt' => 'You are a helpful assistant and you can provide the current date and time.
',
                'tools' => [
                    'PhpLlm\LlmChain\Chain\ToolBox\Tool\Clock',
                ],
            ],
        ],
    ]);
};
