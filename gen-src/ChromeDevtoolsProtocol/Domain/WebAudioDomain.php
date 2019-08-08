<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioListenerCreatedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioListenerWillBeDestroyedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioNodeCreatedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioNodeWillBeDestroyedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioParamCreatedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\AudioParamWillBeDestroyedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextChangedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextCreatedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\ContextWillBeDestroyedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\GetRealtimeDataRequest;
use ChromeDevtoolsProtocol\Model\WebAudio\GetRealtimeDataResponse;
use ChromeDevtoolsProtocol\Model\WebAudio\NodeParamConnectedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\NodeParamDisconnectedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\NodesConnectedEvent;
use ChromeDevtoolsProtocol\Model\WebAudio\NodesDisconnectedEvent;
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


	public function addAudioListenerCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.audioListenerCreated', function ($event) use ($listener) {
			return $listener(AudioListenerCreatedEvent::fromJson($event));
		});
	}


	public function awaitAudioListenerCreated(ContextInterface $ctx): AudioListenerCreatedEvent
	{
		return AudioListenerCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.audioListenerCreated'));
	}


	public function addAudioListenerWillBeDestroyedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.audioListenerWillBeDestroyed', function ($event) use ($listener) {
			return $listener(AudioListenerWillBeDestroyedEvent::fromJson($event));
		});
	}


	public function awaitAudioListenerWillBeDestroyed(ContextInterface $ctx): AudioListenerWillBeDestroyedEvent
	{
		return AudioListenerWillBeDestroyedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.audioListenerWillBeDestroyed'));
	}


	public function addAudioNodeCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.audioNodeCreated', function ($event) use ($listener) {
			return $listener(AudioNodeCreatedEvent::fromJson($event));
		});
	}


	public function awaitAudioNodeCreated(ContextInterface $ctx): AudioNodeCreatedEvent
	{
		return AudioNodeCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.audioNodeCreated'));
	}


	public function addAudioNodeWillBeDestroyedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.audioNodeWillBeDestroyed', function ($event) use ($listener) {
			return $listener(AudioNodeWillBeDestroyedEvent::fromJson($event));
		});
	}


	public function awaitAudioNodeWillBeDestroyed(ContextInterface $ctx): AudioNodeWillBeDestroyedEvent
	{
		return AudioNodeWillBeDestroyedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.audioNodeWillBeDestroyed'));
	}


	public function addAudioParamCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.audioParamCreated', function ($event) use ($listener) {
			return $listener(AudioParamCreatedEvent::fromJson($event));
		});
	}


	public function awaitAudioParamCreated(ContextInterface $ctx): AudioParamCreatedEvent
	{
		return AudioParamCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.audioParamCreated'));
	}


	public function addAudioParamWillBeDestroyedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.audioParamWillBeDestroyed', function ($event) use ($listener) {
			return $listener(AudioParamWillBeDestroyedEvent::fromJson($event));
		});
	}


	public function awaitAudioParamWillBeDestroyed(ContextInterface $ctx): AudioParamWillBeDestroyedEvent
	{
		return AudioParamWillBeDestroyedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.audioParamWillBeDestroyed'));
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


	public function addContextWillBeDestroyedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.contextWillBeDestroyed', function ($event) use ($listener) {
			return $listener(ContextWillBeDestroyedEvent::fromJson($event));
		});
	}


	public function awaitContextWillBeDestroyed(ContextInterface $ctx): ContextWillBeDestroyedEvent
	{
		return ContextWillBeDestroyedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.contextWillBeDestroyed'));
	}


	public function addNodeParamConnectedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.nodeParamConnected', function ($event) use ($listener) {
			return $listener(NodeParamConnectedEvent::fromJson($event));
		});
	}


	public function awaitNodeParamConnected(ContextInterface $ctx): NodeParamConnectedEvent
	{
		return NodeParamConnectedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.nodeParamConnected'));
	}


	public function addNodeParamDisconnectedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.nodeParamDisconnected', function ($event) use ($listener) {
			return $listener(NodeParamDisconnectedEvent::fromJson($event));
		});
	}


	public function awaitNodeParamDisconnected(ContextInterface $ctx): NodeParamDisconnectedEvent
	{
		return NodeParamDisconnectedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.nodeParamDisconnected'));
	}


	public function addNodesConnectedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.nodesConnected', function ($event) use ($listener) {
			return $listener(NodesConnectedEvent::fromJson($event));
		});
	}


	public function awaitNodesConnected(ContextInterface $ctx): NodesConnectedEvent
	{
		return NodesConnectedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.nodesConnected'));
	}


	public function addNodesDisconnectedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('WebAudio.nodesDisconnected', function ($event) use ($listener) {
			return $listener(NodesDisconnectedEvent::fromJson($event));
		});
	}


	public function awaitNodesDisconnected(ContextInterface $ctx): NodesDisconnectedEvent
	{
		return NodesDisconnectedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'WebAudio.nodesDisconnected'));
	}
}
