<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Storage\CacheStorageContentUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\CacheStorageListUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\ClearCookiesRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearDataForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearDataForStorageKeyRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearPrivateVerificationTokensRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearTrustTokensRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearTrustTokensResponse;
use ChromeDevtoolsProtocol\Model\Storage\DeletePrivateVerificationTokenRequest;
use ChromeDevtoolsProtocol\Model\Storage\DeleteStorageBucketRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetCookiesResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetPrivateVerificationTokensResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetStorageKeyForFrameRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetStorageKeyForFrameResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetStorageKeyRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetStorageKeyResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetTrustTokensResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetUsageAndQuotaRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetUsageAndQuotaResponse;
use ChromeDevtoolsProtocol\Model\Storage\IndexedDBContentUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\IndexedDBListUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\OverrideQuotaForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\PrivateVerificationTokensUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\RunBounceTrackingMitigationsResponse;
use ChromeDevtoolsProtocol\Model\Storage\SetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetPrivateVerificationTokensTrackingRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetStorageBucketTrackingRequest;
use ChromeDevtoolsProtocol\Model\Storage\StorageBucketCreatedOrUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\StorageBucketDeletedEvent;
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
	 * Removes all Private Verification Tokens issued by the provided issuerOrigin.
	 *
	 * @param ContextInterface $ctx
	 * @param ClearPrivateVerificationTokensRequest $request
	 *
	 * @return void
	 */
	public function clearPrivateVerificationTokens(
		ContextInterface $ctx,
		ClearPrivateVerificationTokensRequest $request
	): void;


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
	 * Removes a specific Private Verification Token by its ID.
	 *
	 * @param ContextInterface $ctx
	 * @param DeletePrivateVerificationTokenRequest $request
	 *
	 * @return void
	 */
	public function deletePrivateVerificationToken(
		ContextInterface $ctx,
		DeletePrivateVerificationTokenRequest $request
	): void;


	/**
	 * Deletes the Storage Bucket with the given storage key and bucket name.
	 *
	 * @param ContextInterface $ctx
	 * @param DeleteStorageBucketRequest $request
	 *
	 * @return void
	 */
	public function deleteStorageBucket(ContextInterface $ctx, DeleteStorageBucketRequest $request): void;


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
	 * Returns all stored Private Verification Tokens for the current browsing context.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetPrivateVerificationTokensResponse
	 */
	public function getPrivateVerificationTokens(ContextInterface $ctx): GetPrivateVerificationTokensResponse;


	/**
	 * Returns storage key for the given frame. If no frame ID is provided, the storage key of the target executing this command is returned.
	 *
	 * @param ContextInterface $ctx
	 * @param GetStorageKeyRequest $request
	 *
	 * @return GetStorageKeyResponse
	 */
	public function getStorageKey(ContextInterface $ctx, GetStorageKeyRequest $request): GetStorageKeyResponse;


	/**
	 * Returns a storage key given a frame id. Deprecated. Please use Storage.getStorageKey instead.
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
	 * Deletes state for sites identified as potential bounce trackers, immediately.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return RunBounceTrackingMitigationsResponse
	 */
	public function runBounceTrackingMitigations(ContextInterface $ctx): RunBounceTrackingMitigationsResponse;


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
	 * Set tracking for Private Verification Tokens.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPrivateVerificationTokensTrackingRequest $request
	 *
	 * @return void
	 */
	public function setPrivateVerificationTokensTracking(
		ContextInterface $ctx,
		SetPrivateVerificationTokensTrackingRequest $request
	): void;


	/**
	 * Set tracking for a storage key's buckets.
	 *
	 * @param ContextInterface $ctx
	 * @param SetStorageBucketTrackingRequest $request
	 *
	 * @return void
	 */
	public function setStorageBucketTracking(ContextInterface $ctx, SetStorageBucketTrackingRequest $request): void;


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
	 * Private Verification Tokens have been stored or deleted.
	 *
	 * Listener will be called whenever event Storage.privateVerificationTokensUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addPrivateVerificationTokensUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Private Verification Tokens have been stored or deleted.
	 *
	 * Method will block until first Storage.privateVerificationTokensUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return PrivateVerificationTokensUpdatedEvent
	 */
	public function awaitPrivateVerificationTokensUpdated(ContextInterface $ctx): PrivateVerificationTokensUpdatedEvent;


	/**
	 * Subscribe to Storage.storageBucketCreatedOrUpdated event.
	 *
	 * Listener will be called whenever event Storage.storageBucketCreatedOrUpdated is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addStorageBucketCreatedOrUpdatedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for Storage.storageBucketCreatedOrUpdated event.
	 *
	 * Method will block until first Storage.storageBucketCreatedOrUpdated event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return StorageBucketCreatedOrUpdatedEvent
	 */
	public function awaitStorageBucketCreatedOrUpdated(ContextInterface $ctx): StorageBucketCreatedOrUpdatedEvent;


	/**
	 * Subscribe to Storage.storageBucketDeleted event.
	 *
	 * Listener will be called whenever event Storage.storageBucketDeleted is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addStorageBucketDeletedListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for Storage.storageBucketDeleted event.
	 *
	 * Method will block until first Storage.storageBucketDeleted event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return StorageBucketDeletedEvent
	 */
	public function awaitStorageBucketDeleted(ContextInterface $ctx): StorageBucketDeletedEvent;
}
