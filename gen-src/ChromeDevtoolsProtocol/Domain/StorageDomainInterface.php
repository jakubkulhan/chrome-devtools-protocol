<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Storage\CacheStorageContentUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\CacheStorageListUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\ClearCookiesRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearDataForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearDataForStorageKeyRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearSharedStorageEntriesRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearTrustTokensRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearTrustTokensResponse;
use ChromeDevtoolsProtocol\Model\Storage\DeleteSharedStorageEntryRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetCookiesResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetInterestGroupDetailsRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetInterestGroupDetailsResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetSharedStorageEntriesRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetSharedStorageEntriesResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetSharedStorageMetadataRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetSharedStorageMetadataResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetStorageKeyForFrameRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetStorageKeyForFrameResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetTrustTokensResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetUsageAndQuotaRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetUsageAndQuotaResponse;
use ChromeDevtoolsProtocol\Model\Storage\IndexedDBContentUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\IndexedDBListUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\InterestGroupAccessedEvent;
use ChromeDevtoolsProtocol\Model\Storage\OverrideQuotaForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\ResetSharedStorageBudgetRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetInterestGroupTrackingRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetSharedStorageEntryRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetSharedStorageTrackingRequest;
use ChromeDevtoolsProtocol\Model\Storage\SharedStorageAccessedEvent;
use ChromeDevtoolsProtocol\Model\Storage\TrackCacheStorageForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\TrackCacheStorageForStorageKeyRequest;
use ChromeDevtoolsProtocol\Model\Storage\TrackIndexedDBForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\TrackIndexedDBForStorageKeyRequest;
use ChromeDevtoolsProtocol\Model\Storage\UntrackCacheStorageForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\UntrackCacheStorageForStorageKeyRequest;
use ChromeDevtoolsProtocol\Model\Storage\UntrackIndexedDBForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\UntrackIndexedDBForStorageKeyRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Storage domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface StorageDomainInterface
{
	/**
	 * Clears cookies.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearCookiesRequest $request
	 *
	 * @return void
	 */
	public function clearCookies(ContextInterface $ctx, ClearCookiesRequest $request): void;


	/**
	 * Clears storage for origin.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearDataForOriginRequest $request
	 *
	 * @return void
	 */
	public function clearDataForOrigin(ContextInterface $ctx, ClearDataForOriginRequest $request): void;


	/**
	 * Clears storage for storage key.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearDataForStorageKeyRequest $request
	 *
	 * @return void
	 */
	public function clearDataForStorageKey(ContextInterface $ctx, ClearDataForStorageKeyRequest $request): void;


	/**
	 * Clears all entries for a given origin's shared storage.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearSharedStorageEntriesRequest $request
	 *
	 * @return void
	 */
	public function clearSharedStorageEntries(ContextInterface $ctx, ClearSharedStorageEntriesRequest $request): void;


	/**
	 * Removes all Trust Tokens issued by the provided issuerOrigin. Leaves other stored data, including the issuer's Redemption Records, intact.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearTrustTokensRequest $request
	 *
	 * @return ClearTrustTokensResponse
	 */
	public function clearTrustTokens(ContextInterface $ctx, ClearTrustTokensRequest $request): ClearTrustTokensResponse;


	/**
	 * Deletes entry for `key` (if it exists) for a given origin's shared storage.
	 *
	 * @param ContextInterface $ctx
	 * @param DeleteSharedStorageEntryRequest $request
	 *
	 * @return void
	 */
	public function deleteSharedStorageEntry(ContextInterface $ctx, DeleteSharedStorageEntryRequest $request): void;


	/**
	 * Returns all browser cookies.
	 *
	 * @param ContextInterface $ctx
	 * @param GetCookiesRequest $request
	 *
	 * @return GetCookiesResponse
	 */
	public function getCookies(ContextInterface $ctx, GetCookiesRequest $request): GetCookiesResponse;


	/**
	 * Gets details for a named interest group.
	 *
	 * @param ContextInterface $ctx
	 * @param GetInterestGroupDetailsRequest $request
	 *
	 * @return GetInterestGroupDetailsResponse
	 */
	public function getInterestGroupDetails(
		ContextInterface $ctx,
		GetInterestGroupDetailsRequest $request
	): GetInterestGroupDetailsResponse;


	/**
	 * Gets the entries in an given origin's shared storage.
	 *
	 * @param ContextInterface $ctx
	 * @param GetSharedStorageEntriesRequest $request
	 *
	 * @return GetSharedStorageEntriesResponse
	 */
	public function getSharedStorageEntries(
		ContextInterface $ctx,
		GetSharedStorageEntriesRequest $request
	): GetSharedStorageEntriesResponse;


	/**
	 * Gets metadata for an origin's shared storage.
	 *
	 * @param ContextInterface $ctx
	 * @param GetSharedStorageMetadataRequest $request
	 *
	 * @return GetSharedStorageMetadataResponse
	 */
	public function getSharedStorageMetadata(
		ContextInterface $ctx,
		GetSharedStorageMetadataRequest $request
	): GetSharedStorageMetadataResponse;


	/**
	 * Returns a storage key given a frame id.
	 *
	 * @param ContextInterface $ctx
	 * @param GetStorageKeyForFrameRequest $request
	 *
	 * @return GetStorageKeyForFrameResponse
	 */
	public function getStorageKeyForFrame(
		ContextInterface $ctx,
		GetStorageKeyForFrameRequest $request
	): GetStorageKeyForFrameResponse;


	/**
	 * Returns the number of stored Trust Tokens per issuer for the current browsing context.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetTrustTokensResponse
	 */
	public function getTrustTokens(ContextInterface $ctx): GetTrustTokensResponse;


	/**
	 * Returns usage and quota in bytes.
	 *
	 * @param ContextInterface $ctx
	 * @param GetUsageAndQuotaRequest $request
	 *
	 * @return GetUsageAndQuotaResponse
	 */
	public function getUsageAndQuota(ContextInterface $ctx, GetUsageAndQuotaRequest $request): GetUsageAndQuotaResponse;


	/**
	 * Override quota for the specified origin
	 *
	 * @param ContextInterface $ctx
	 * @param OverrideQuotaForOriginRequest $request
	 *
	 * @return void
	 */
	public function overrideQuotaForOrigin(ContextInterface $ctx, OverrideQuotaForOriginRequest $request): void;


	/**
	 * Resets the budget for `ownerOrigin` by clearing all budget withdrawals.
	 *
	 * @param ContextInterface $ctx
	 * @param ResetSharedStorageBudgetRequest $request
	 *
	 * @return void
	 */
	public function resetSharedStorageBudget(ContextInterface $ctx, ResetSharedStorageBudgetRequest $request): void;


	/**
	 * Sets given cookies.
	 *
	 * @param ContextInterface $ctx
	 * @param SetCookiesRequest $request
	 *
	 * @return void
	 */
	public function setCookies(ContextInterface $ctx, SetCookiesRequest $request): void;


	/**
	 * Enables/Disables issuing of interestGroupAccessed events.
	 *
	 * @param ContextInterface $ctx
	 * @param SetInterestGroupTrackingRequest $request
	 *
	 * @return void
	 */
	public function setInterestGroupTracking(ContextInterface $ctx, SetInterestGroupTrackingRequest $request): void;


	/**
	 * Sets entry with `key` and `value` for a given origin's shared storage.
	 *
	 * @param ContextInterface $ctx
	 * @param SetSharedStorageEntryRequest $request
	 *
	 * @return void
	 */
	public function setSharedStorageEntry(ContextInterface $ctx, SetSharedStorageEntryRequest $request): void;


	/**
	 * Enables/disables issuing of sharedStorageAccessed events.
	 *
	 * @param ContextInterface $ctx
	 * @param SetSharedStorageTrackingRequest $request
	 *
	 * @return void
	 */
	public function setSharedStorageTracking(ContextInterface $ctx, SetSharedStorageTrackingRequest $request): void;


	/**
	 * Registers origin to be notified when an update occurs to its cache storage list.
	 *
	 * @param ContextInterface $ctx
	 * @param TrackCacheStorageForOriginRequest $request
	 *
	 * @return void
	 */
	public function trackCacheStorageForOrigin(ContextInterface $ctx, TrackCacheStorageForOriginRequest $request): void;


	/**
	 * Registers storage key to be notified when an update occurs to its cache storage list.
	 *
	 * @param ContextInterface $ctx
	 * @param TrackCacheStorageForStorageKeyRequest $request
	 *
	 * @return void
	 */
	public function trackCacheStorageForStorageKey(
		ContextInterface $ctx,
		TrackCacheStorageForStorageKeyRequest $request
	): void;


	/**
	 * Registers origin to be notified when an update occurs to its IndexedDB.
	 *
	 * @param ContextInterface $ctx
	 * @param TrackIndexedDBForOriginRequest $request
	 *
	 * @return void
	 */
	public function trackIndexedDBForOrigin(ContextInterface $ctx, TrackIndexedDBForOriginRequest $request): void;


	/**
	 * Registers storage key to be notified when an update occurs to its IndexedDB.
	 *
	 * @param ContextInterface $ctx
	 * @param TrackIndexedDBForStorageKeyRequest $request
	 *
	 * @return void
	 */
	public function trackIndexedDBForStorageKey(ContextInterface $ctx, TrackIndexedDBForStorageKeyRequest $request): void;


	/**
	 * Unregisters origin from receiving notifications for cache storage.
	 *
	 * @param ContextInterface $ctx
	 * @param UntrackCacheStorageForOriginRequest $request
	 *
	 * @return void
	 */
	public function untrackCacheStorageForOrigin(ContextInterface $ctx, UntrackCacheStorageForOriginRequest $request): void;


	/**
	 * Unregisters storage key from receiving notifications for cache storage.
	 *
	 * @param ContextInterface $ctx
	 * @param UntrackCacheStorageForStorageKeyRequest $request
	 *
	 * @return void
	 */
	public function untrackCacheStorageForStorageKey(
		ContextInterface $ctx,
		UntrackCacheStorageForStorageKeyRequest $request
	): void;


	/**
	 * Unregisters origin from receiving notifications for IndexedDB.
	 *
	 * @param ContextInterface $ctx
	 * @param UntrackIndexedDBForOriginRequest $request
	 *
	 * @return void
	 */
	public function untrackIndexedDBForOrigin(ContextInterface $ctx, UntrackIndexedDBForOriginRequest $request): void;


	/**
	 * Unregisters storage key from receiving notifications for IndexedDB.
	 *
	 * @param ContextInterface $ctx
	 * @param UntrackIndexedDBForStorageKeyRequest $request
	 *
	 * @return void
	 */
	public function untrackIndexedDBForStorageKey(
		ContextInterface $ctx,
		UntrackIndexedDBForStorageKeyRequest $request
	): void;


	/**
	 * A cache's contents have been modified.
	 *
	 * Listener will be called whenever event Storage.cacheStorageContentUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCacheStorageContentUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * A cache's contents have been modified.
	 *
	 * Method will block until first Storage.cacheStorageContentUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CacheStorageContentUpdatedEvent
	 */
	public function awaitCacheStorageContentUpdated(ContextInterface $ctx): CacheStorageContentUpdatedEvent;


	/**
	 * A cache has been added/deleted.
	 *
	 * Listener will be called whenever event Storage.cacheStorageListUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCacheStorageListUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * A cache has been added/deleted.
	 *
	 * Method will block until first Storage.cacheStorageListUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CacheStorageListUpdatedEvent
	 */
	public function awaitCacheStorageListUpdated(ContextInterface $ctx): CacheStorageListUpdatedEvent;


	/**
	 * The origin's IndexedDB object store has been modified.
	 *
	 * Listener will be called whenever event Storage.indexedDBContentUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addIndexedDBContentUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * The origin's IndexedDB object store has been modified.
	 *
	 * Method will block until first Storage.indexedDBContentUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return IndexedDBContentUpdatedEvent
	 */
	public function awaitIndexedDBContentUpdated(ContextInterface $ctx): IndexedDBContentUpdatedEvent;


	/**
	 * The origin's IndexedDB database list has been modified.
	 *
	 * Listener will be called whenever event Storage.indexedDBListUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addIndexedDBListUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * The origin's IndexedDB database list has been modified.
	 *
	 * Method will block until first Storage.indexedDBListUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return IndexedDBListUpdatedEvent
	 */
	public function awaitIndexedDBListUpdated(ContextInterface $ctx): IndexedDBListUpdatedEvent;


	/**
	 * One of the interest groups was accessed by the associated page.
	 *
	 * Listener will be called whenever event Storage.interestGroupAccessed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addInterestGroupAccessedListener(callable $listener): SubscriptionInterface;


	/**
	 * One of the interest groups was accessed by the associated page.
	 *
	 * Method will block until first Storage.interestGroupAccessed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return InterestGroupAccessedEvent
	 */
	public function awaitInterestGroupAccessed(ContextInterface $ctx): InterestGroupAccessedEvent;


	/**
	 * Shared storage was accessed by the associated page. The following parameters are included in all events.
	 *
	 * Listener will be called whenever event Storage.sharedStorageAccessed is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addSharedStorageAccessedListener(callable $listener): SubscriptionInterface;


	/**
	 * Shared storage was accessed by the associated page. The following parameters are included in all events.
	 *
	 * Method will block until first Storage.sharedStorageAccessed event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return SharedStorageAccessedEvent
	 */
	public function awaitSharedStorageAccessed(ContextInterface $ctx): SharedStorageAccessedEvent;
}
