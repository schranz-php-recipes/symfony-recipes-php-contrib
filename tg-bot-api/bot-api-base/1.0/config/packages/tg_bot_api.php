<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use TgBotApi\BotApiBase\BotApiNormalizer;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set('TgBotApi\BotApiBase\ApiClient')
        ->arg('$requestFactory', service('Psr\Http\Message\RequestFactoryInterface'))
        ->arg('$streamFactory', service('Psr\Http\Message\StreamFactoryInterface'))
        ->arg('$client', service('Psr\Http\Client\ClientInterface'));

    $services->set(BotApiNormalizer::class);

    $services->alias('TgBotApi\BotApiBase\ApiClientInterface', 'TgBotApi\BotApiBase\ApiClient');

    $services->alias('TgBotApi\BotApiBase\NormalizerInterface', 'TgBotApi\BotApiBase\BotApiNormalizer');

    $services->set('TgBotApi\BotApiBase\BotApi')
        ->arg('$botKey', '%env(resolve:TG_BOT_API_KEY)%')
        ->arg('$apiClient', service('TgBotApi\BotApiBase\ApiClientInterface'))
        ->arg('$normalizer', service('TgBotApi\BotApiBase\NormalizerInterface'));

    $services->set('TgBotApi\BotApiBase\BotApiComplete')
        ->parent('TgBotApi\BotApiBase\BotApi');

    $services->alias('TgBotApi\BotApiBase\BotApiInterface', 'TgBotApi\BotApiBase\BotApi');
};
