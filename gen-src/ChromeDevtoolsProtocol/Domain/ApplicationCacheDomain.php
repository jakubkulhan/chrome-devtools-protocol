<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\ApplicationCache\ApplicationCacheStatusUpdatedEvent;
use ChromeDevtoolsProtocol\Model\ApplicationCache\GetApplicationCacheForFrameRequest;
use ChromeDevtoolsProtocol\Model\ApplicationCache\GetApplicationCacheForFrameResponse;
use ChromeDevtoolsProtocol\Model\ApplicationCache\GetFramesWithManifestsResponse;
use ChromeDevtoolsProtocol\Model\ApplicationCache\GetManifestForFrameRequest;
use ChromeDevtoolsProtocol\Model\ApplicationCache\GetManifestForFrameResponse;
use ChromeDevtoolsProtocol\Model\ApplicationCache\NetworkStateUpdatedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class ApplicationCacheDomain implements ApplicationCacheDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'ApplicationCache.enable', $request);
	}


	public function getApplicationCacheForFrame(ContextInterface $ctx, GetApplicationCacheForFrameRequest $request): GetApplicationCacheForFrameResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'ApplicationCache.getApplicationCacheForFrame', $request);
		return GetApplicationCacheForFrameResponse::fromJson($response);
	}


	public function getFramesWithManifests(ContextInterface $ctx): GetFramesWithManifestsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'ApplicationCache.getFramesWithManifests', $request);
		return GetFramesWithManifestsResponse::fromJson($response);
	}


	public function getManifestForFrame(ContextInterface $ctx, GetManifestForFrameRequest $request): GetManifestForFrameResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'ApplicationCache.getManifestForFrame', $request);
		return GetManifestForFrameResponse::fromJson($response);
	}


	public function addApplicationCacheStatusUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('ApplicationCache.applicationCacheStatusUpdated', function ($event) use ($listener) {
			return $listener(ApplicationCacheStatusUpdatedEvent::fromJson($event));
		});
	}


	public function awaitApplicationCacheStatusUpdated(ContextInterface $ctx): ApplicationCacheStatusUpdatedEvent
	{
		return ApplicationCacheStatusUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'ApplicationCache.applicationCacheStatusUpdated'));
	}


	public function addNetworkStateUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('ApplicationCache.networkStateUpdated', function ($event) use ($listener) {
			return $listener(NetworkStateUpdatedEvent::fromJson($event));
		});
	}


	public function awaitNetworkStateUpdated(ContextInterface $ctx): NetworkStateUpdatedEvent
	{
		return NetworkStateUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'ApplicationCache.networkStateUpdated'));
	}
}
