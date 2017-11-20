<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\ApplicationCache\ApplicationCacheStatusUpdatedEvent;
use ChromeDevtoolsProtocol\Model\ApplicationCache\GetApplicationCacheForFrameRequest;
use ChromeDevtoolsProtocol\Model\ApplicationCache\GetApplicationCacheForFrameResponse;
use ChromeDevtoolsProtocol\Model\ApplicationCache\GetFramesWithManifestsResponse;
use ChromeDevtoolsProtocol\Model\ApplicationCache\GetManifestForFrameRequest;
use ChromeDevtoolsProtocol\Model\ApplicationCache\GetManifestForFrameResponse;
use ChromeDevtoolsProtocol\Model\ApplicationCache\NetworkStateUpdatedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * ApplicationCache domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface ApplicationCacheDomainInterface
{
	/**
	 * Returns array of frame identifiers with manifest urls for each frame containing a document associated with some application cache.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetFramesWithManifestsResponse
	 */
	public function getFramesWithManifests(ContextInterface $ctx): GetFramesWithManifestsResponse;


	/**
	 * Enables application cache domain notifications.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Returns manifest URL for document in the given frame.
	 *
	 * @param ContextInterface $ctx
	 * @param GetManifestForFrameRequest $request
	 *
	 * @return GetManifestForFrameResponse
	 */
	public function getManifestForFrame(ContextInterface $ctx, GetManifestForFrameRequest $request): GetManifestForFrameResponse;


	/**
	 * Returns relevant application cache data for the document in given frame.
	 *
	 * @param ContextInterface $ctx
	 * @param GetApplicationCacheForFrameRequest $request
	 *
	 * @return GetApplicationCacheForFrameResponse
	 */
	public function getApplicationCacheForFrame(ContextInterface $ctx, GetApplicationCacheForFrameRequest $request): GetApplicationCacheForFrameResponse;


	/**
	 * Subscribe to ApplicationCache.applicationCacheStatusUpdated event.
	 *
	 * Listener will be called whenever event ApplicationCache.applicationCacheStatusUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addApplicationCacheStatusUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for ApplicationCache.applicationCacheStatusUpdated event.
	 *
	 * Method will block until first ApplicationCache.applicationCacheStatusUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ApplicationCacheStatusUpdatedEvent
	 */
	public function awaitApplicationCacheStatusUpdated(ContextInterface $ctx): ApplicationCacheStatusUpdatedEvent;


	/**
	 * Subscribe to ApplicationCache.networkStateUpdated event.
	 *
	 * Listener will be called whenever event ApplicationCache.networkStateUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addNetworkStateUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for ApplicationCache.networkStateUpdated event.
	 *
	 * Method will block until first ApplicationCache.networkStateUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return NetworkStateUpdatedEvent
	 */
	public function awaitNetworkStateUpdated(ContextInterface $ctx): NetworkStateUpdatedEvent;
}
