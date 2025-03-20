<?php

declare(strict_types=1);

use Datana\Datapool\Api\AktenApi;
use Datana\Datapool\Api\AktenEventLogApi;
use Datana\Datapool\Api\AktenzeichenApi;
use Datana\Datapool\Api\ChatProtocolApi;
use Datana\Datapool\Api\FakeAktenzeichenApi;
use Datana\Datapool\Api\NullAktenEventLogApi;
use Datana\Datapool\Api\NullChatProtocolApi;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->defaults()
        ->autowire();

    $services->set('Datana\Datapool\Api\DatapoolClient')
        ->args([
            '%env(DATAPOOL_API_BASE_URI)%',
            '%env(DATAPOOL_API_USERNAME)%',
            '%env(DATAPOOL_API_PASSWORD)%',
        ]);

    $services->set(AktenApi::class);

    $services->alias('Datana\Datapool\Api\AktenApiInterface', 'Datana\Datapool\Api\AktenApi');

    $services->set(AktenEventLogApi::class);

    $services->set(NullAktenEventLogApi::class);

    $services->set(AktenzeichenApi::class);

    $services->set(FakeAktenzeichenApi::class);

    $services->set(ChatProtocolApi::class);

    $services->set(NullChatProtocolApi::class);
    if ($containerConfigurator->env() === 'prod') {
        $containerConfigurator->extension('services', [
            'Datana\Datapool\Api\AktenEventLogApiInterface' => service('Datana\Datapool\Api\AktenEventLogApi'),
            'Datana\Datapool\Api\AktenzeichenApiInterface' => service('Datana\Datapool\Api\AktenzeichenApi'),
            'Datana\Datapool\Api\ChatProtocolApiInterface' => service('Datana\Datapool\Api\ChatProtocolApi'),
        ]);
    }
    if ($containerConfigurator->env() === 'dev') {
        $containerConfigurator->extension('services', [
            'Datana\Datapool\Api\AktenEventLogApiInterface' => service('Datana\Datapool\Api\NullAktenEventLogApi'),
            'Datana\Datapool\Api\AktenzeichenApiInterface' => service('Datana\Datapool\Api\FakeAktenzeichenApi'),
            'Datana\Datapool\Api\ChatProtocolApiInterface' => service('Datana\Datapool\Api\NullChatProtocolApi'),
        ]);
    }
    if ($containerConfigurator->env() === 'test') {
        $containerConfigurator->extension('services', [
            'Datana\Datapool\Api\AktenEventLogApiInterface' => service('Datana\Datapool\Api\NullAktenEventLogApi'),
            'Datana\Datapool\Api\AktenzeichenApiInterface' => service('Datana\Datapool\Api\FakeAktenzeichenApi'),
            'Datana\Datapool\Api\ChatProtocolApiInterface' => service('Datana\Datapool\Api\NullChatProtocolApi'),
        ]);
    }
};
