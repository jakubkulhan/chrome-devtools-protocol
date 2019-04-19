<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextChangedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextCreatedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextDestroyedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\GetRealtimeDataRequest;
use ChromeDevtoolsProtocol\Model\WebAudio\GetRealtimeDataResponse;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class WebAudioDomain implements WebAudioDomainInterface
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
		$this->internalClient->executeCommand($ctx, 'WebAudio.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'WebAudio.enable', $request);
	}


	public function getRealtimeData(ContextInterface $ctx, GetRealtimeDataRequest $request): GetRealtimeDataResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'WebAudio.getRealtimeData', $request);
		return GetRealtimeDataResponse::fromJson($response);
	}


	public function addContextChangedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.contextChanged', function ($event) use ($listener) {
			return $listener(ContextChangedEvent::fromJson($event));
		});
	}


	public function awaitContextChanged(ContextInterface $ctx): ContextChangedEvent
	{
		return ContextChangedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.contextChanged'));
	}


	public function addContextCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.contextCreated', function ($event) use ($listener) {
			return $listener(ContextCreatedEvent::fromJson($event));
		});
	}


	public function awaitContextCreated(ContextInterface $ctx): ContextCreatedEvent
	{
		return ContextCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.contextCreated'));
	}


	public function addContextDestroyedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.contextDestroyed', function ($event) use ($listener) {
			return $listener(ContextDestroyedEvent::fromJson($event));
		});
	}


	public function awaitContextDestroyed(ContextInterface $ctx): ContextDestroyedEvent
	{
		return ContextDestroyedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.contextDestroyed'));
	}
}
