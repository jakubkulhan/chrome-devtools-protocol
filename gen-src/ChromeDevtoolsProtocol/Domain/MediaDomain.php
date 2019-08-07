<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Media\PlayerEventsAddedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayerPropertiesChangedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayersCreatedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class MediaDomain implements MediaDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Media.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Media.enable', $request);
	}


	public function addPlayerEventsAddedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Media.playerEventsAdded', function ($event) use ($listener) {
			return $listener(PlayerEventsAddedEvent::fromJson($event));
		});
	}


	public function awaitPlayerEventsAdded(ContextInterface $ctx): PlayerEventsAddedEvent
	{
		return PlayerEventsAddedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Media.playerEventsAdded'));
	}


	public function addPlayerPropertiesChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Media.playerPropertiesChanged', function ($event) use ($listener) {
			return $listener(PlayerPropertiesChangedEvent::fromJson($event));
		});
	}


	public function awaitPlayerPropertiesChanged(ContextInterface $ctx): PlayerPropertiesChangedEvent
	{
		return PlayerPropertiesChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Media.playerPropertiesChanged'));
	}


	public function addPlayersCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Media.playersCreated', function ($event) use ($listener) {
			return $listener(PlayersCreatedEvent::fromJson($event));
		});
	}


	public function awaitPlayersCreated(ContextInterface $ctx): PlayersCreatedEvent
	{
		return PlayersCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Media.playersCreated'));
	}
}
