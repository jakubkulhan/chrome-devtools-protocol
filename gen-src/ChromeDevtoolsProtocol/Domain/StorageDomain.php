<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
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

class StorageDomain implements StorageDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function clearCookies(ContextInterface $ctx, ClearCookiesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.clearCookies', $request);
	}


	public function clearDataForOrigin(ContextInterface $ctx, ClearDataForOriginRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.clearDataForOrigin', $request);
	}


	public function clearDataForStorageKey(ContextInterface $ctx, ClearDataForStorageKeyRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.clearDataForStorageKey', $request);
	}


	public function clearPrivateVerificationTokens(
		ContextInterface $ctx,
		ClearPrivateVerificationTokensRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Storage.clearPrivateVerificationTokens', $request);
	}


	public function clearTrustTokens(ContextInterface $ctx, ClearTrustTokensRequest $request): ClearTrustTokensResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Storage.clearTrustTokens', $request);
		return ClearTrustTokensResponse::fromJson($response);
	}


	public function deletePrivateVerificationToken(
		ContextInterface $ctx,
		DeletePrivateVerificationTokenRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Storage.deletePrivateVerificationToken', $request);
	}


	public function deleteStorageBucket(ContextInterface $ctx, DeleteStorageBucketRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.deleteStorageBucket', $request);
	}


	public function getCookies(ContextInterface $ctx, GetCookiesRequest $request): GetCookiesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getCookies', $request);
		return GetCookiesResponse::fromJson($response);
	}


	public function getPrivateVerificationTokens(ContextInterface $ctx): GetPrivateVerificationTokensResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getPrivateVerificationTokens', $request);
		return GetPrivateVerificationTokensResponse::fromJson($response);
	}


	public function getStorageKey(ContextInterface $ctx, GetStorageKeyRequest $request): GetStorageKeyResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getStorageKey', $request);
		return GetStorageKeyResponse::fromJson($response);
	}


	public function getStorageKeyForFrame(
		ContextInterface $ctx,
		GetStorageKeyForFrameRequest $request
	): GetStorageKeyForFrameResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getStorageKeyForFrame', $request);
		return GetStorageKeyForFrameResponse::fromJson($response);
	}


	public function getTrustTokens(ContextInterface $ctx): GetTrustTokensResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getTrustTokens', $request);
		return GetTrustTokensResponse::fromJson($response);
	}


	public function getUsageAndQuota(ContextInterface $ctx, GetUsageAndQuotaRequest $request): GetUsageAndQuotaResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getUsageAndQuota', $request);
		return GetUsageAndQuotaResponse::fromJson($response);
	}


	public function overrideQuotaForOrigin(ContextInterface $ctx, OverrideQuotaForOriginRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.overrideQuotaForOrigin', $request);
	}


	public function runBounceTrackingMitigations(ContextInterface $ctx): RunBounceTrackingMitigationsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Storage.runBounceTrackingMitigations', $request);
		return RunBounceTrackingMitigationsResponse::fromJson($response);
	}


	public function setCookies(ContextInterface $ctx, SetCookiesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.setCookies', $request);
	}


	public function setPrivateVerificationTokensTracking(
		ContextInterface $ctx,
		SetPrivateVerificationTokensTrackingRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Storage.setPrivateVerificationTokensTracking', $request);
	}


	public function setStorageBucketTracking(ContextInterface $ctx, SetStorageBucketTrackingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.setStorageBucketTracking', $request);
	}


	public function trackCacheStorageForOrigin(ContextInterface $ctx, TrackCacheStorageForOriginRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.trackCacheStorageForOrigin', $request);
	}


	public function trackCacheStorageForStorageKey(
		ContextInterface $ctx,
		TrackCacheStorageForStorageKeyRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Storage.trackCacheStorageForStorageKey', $request);
	}


	public function trackIndexedDBForOrigin(ContextInterface $ctx, TrackIndexedDBForOriginRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.trackIndexedDBForOrigin', $request);
	}


	public function trackIndexedDBForStorageKey(ContextInterface $ctx, TrackIndexedDBForStorageKeyRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.trackIndexedDBForStorageKey', $request);
	}


	public function untrackCacheStorageForOrigin(ContextInterface $ctx, UntrackCacheStorageForOriginRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.untrackCacheStorageForOrigin', $request);
	}


	public function untrackCacheStorageForStorageKey(
		ContextInterface $ctx,
		UntrackCacheStorageForStorageKeyRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Storage.untrackCacheStorageForStorageKey', $request);
	}


	public function untrackIndexedDBForOrigin(ContextInterface $ctx, UntrackIndexedDBForOriginRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.untrackIndexedDBForOrigin', $request);
	}


	public function untrackIndexedDBForStorageKey(
		ContextInterface $ctx,
		UntrackIndexedDBForStorageKeyRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Storage.untrackIndexedDBForStorageKey', $request);
	}


	public function addCacheStorageContentUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.cacheStorageContentUpdated', function ($event) use ($listener) {
			return $listener(CacheStorageContentUpdatedEvent::fromJson($event));
		});
	}


	public function awaitCacheStorageContentUpdated(ContextInterface $ctx): CacheStorageContentUpdatedEvent
	{
		return CacheStorageContentUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.cacheStorageContentUpdated'));
	}


	public function addCacheStorageListUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.cacheStorageListUpdated', function ($event) use ($listener) {
			return $listener(CacheStorageListUpdatedEvent::fromJson($event));
		});
	}


	public function awaitCacheStorageListUpdated(ContextInterface $ctx): CacheStorageListUpdatedEvent
	{
		return CacheStorageListUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.cacheStorageListUpdated'));
	}


	public function addIndexedDBContentUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.indexedDBContentUpdated', function ($event) use ($listener) {
			return $listener(IndexedDBContentUpdatedEvent::fromJson($event));
		});
	}


	public function awaitIndexedDBContentUpdated(ContextInterface $ctx): IndexedDBContentUpdatedEvent
	{
		return IndexedDBContentUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.indexedDBContentUpdated'));
	}


	public function addIndexedDBListUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.indexedDBListUpdated', function ($event) use ($listener) {
			return $listener(IndexedDBListUpdatedEvent::fromJson($event));
		});
	}


	public function awaitIndexedDBListUpdated(ContextInterface $ctx): IndexedDBListUpdatedEvent
	{
		return IndexedDBListUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.indexedDBListUpdated'));
	}


	public function addPrivateVerificationTokensUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.privateVerificationTokensUpdated', function ($event) use ($listener) {
			return $listener(PrivateVerificationTokensUpdatedEvent::fromJson($event));
		});
	}


	public function awaitPrivateVerificationTokensUpdated(ContextInterface $ctx): PrivateVerificationTokensUpdatedEvent
	{
		return PrivateVerificationTokensUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.privateVerificationTokensUpdated'));
	}


	public function addStorageBucketCreatedOrUpdatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.storageBucketCreatedOrUpdated', function ($event) use ($listener) {
			return $listener(StorageBucketCreatedOrUpdatedEvent::fromJson($event));
		});
	}


	public function awaitStorageBucketCreatedOrUpdated(ContextInterface $ctx): StorageBucketCreatedOrUpdatedEvent
	{
		return StorageBucketCreatedOrUpdatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.storageBucketCreatedOrUpdated'));
	}


	public function addStorageBucketDeletedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.storageBucketDeleted', function ($event) use ($listener) {
			return $listener(StorageBucketDeletedEvent::fromJson($event));
		});
	}


	public function awaitStorageBucketDeleted(ContextInterface $ctx): StorageBucketDeletedEvent
	{
		return StorageBucketDeletedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.storageBucketDeleted'));
	}
}
