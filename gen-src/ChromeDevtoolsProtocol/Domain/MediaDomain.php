<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Media\PlayerCreatedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayerErrorsRaisedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayerEventsAddedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayerMessagesLoggedEvent;
use ChromeDevtoolsProtocol\Model\Media\PlayerPropertiesChangedEvent;
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


	public function addPlayerCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Media.playerCreated', function ($event) use ($listener) {
			return $listener(PlayerCreatedEvent::fromJson($event));
		});
	}


	public function awaitPlayerCreated(ContextInterface $ctx): PlayerCreatedEvent
	{
		return PlayerCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Media.playerCreated'));
	}


	public function addPlayerErrorsRaisedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Media.playerErrorsRaised', function ($event) use ($listener) {
			return $listener(PlayerErrorsRaisedEvent::fromJson($event));
		});
	}


	public function awaitPlayerErrorsRaised(ContextInterface $ctx): PlayerErrorsRaisedEvent
	{
		return PlayerErrorsRaisedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Media.playerErrorsRaised'));
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


	public function addPlayerMessagesLoggedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Media.playerMessagesLogged', function ($event) use ($listener) {
			return $listener(PlayerMessagesLoggedEvent::fromJson($event));
		});
	}


	public function awaitPlayerMessagesLogged(ContextInterface $ctx): PlayerMessagesLoggedEvent
	{
		return PlayerMessagesLoggedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Media.playerMessagesLogged'));
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
}
