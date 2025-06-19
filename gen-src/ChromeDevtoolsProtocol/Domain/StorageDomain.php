<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Storage\AttributionReportingReportSentEvent;
use ChromeDevtoolsProtocol\Model\Storage\AttributionReportingSourceRegisteredEvent;
use ChromeDevtoolsProtocol\Model\Storage\AttributionReportingTriggerRegisteredEvent;
use ChromeDevtoolsProtocol\Model\Storage\AttributionReportingVerboseDebugReportSentEvent;
use ChromeDevtoolsProtocol\Model\Storage\CacheStorageContentUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\CacheStorageListUpdatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\ClearCookiesRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearDataForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearDataForStorageKeyRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearSharedStorageEntriesRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearTrustTokensRequest;
use ChromeDevtoolsProtocol\Model\Storage\ClearTrustTokensResponse;
use ChromeDevtoolsProtocol\Model\Storage\DeleteSharedStorageEntryRequest;
use ChromeDevtoolsProtocol\Model\Storage\DeleteStorageBucketRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetAffectedUrlsForThirdPartyCookieMetadataRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetAffectedUrlsForThirdPartyCookieMetadataResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetCookiesResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetInterestGroupDetailsRequest;
use ChromeDevtoolsProtocol\Model\Storage\GetInterestGroupDetailsResponse;
use ChromeDevtoolsProtocol\Model\Storage\GetRelatedWebsiteSetsResponse;
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
use ChromeDevtoolsProtocol\Model\Storage\InterestGroupAuctionEventOccurredEvent;
use ChromeDevtoolsProtocol\Model\Storage\InterestGroupAuctionNetworkRequestCreatedEvent;
use ChromeDevtoolsProtocol\Model\Storage\OverrideQuotaForOriginRequest;
use ChromeDevtoolsProtocol\Model\Storage\ResetSharedStorageBudgetRequest;
use ChromeDevtoolsProtocol\Model\Storage\RunBounceTrackingMitigationsResponse;
use ChromeDevtoolsProtocol\Model\Storage\SendPendingAttributionReportsResponse;
use ChromeDevtoolsProtocol\Model\Storage\SetAttributionReportingLocalTestingModeRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetAttributionReportingTrackingRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetCookiesRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetInterestGroupAuctionTrackingRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetInterestGroupTrackingRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetProtectedAudienceKAnonymityRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetSharedStorageEntryRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetSharedStorageTrackingRequest;
use ChromeDevtoolsProtocol\Model\Storage\SetStorageBucketTrackingRequest;
use ChromeDevtoolsProtocol\Model\Storage\SharedStorageAccessedEvent;
use ChromeDevtoolsProtocol\Model\Storage\SharedStorageWorkletOperationExecutionFinishedEvent;
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


	public function clearSharedStorageEntries(ContextInterface $ctx, ClearSharedStorageEntriesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.clearSharedStorageEntries', $request);
	}


	public function clearTrustTokens(ContextInterface $ctx, ClearTrustTokensRequest $request): ClearTrustTokensResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Storage.clearTrustTokens', $request);
		return ClearTrustTokensResponse::fromJson($response);
	}


	public function deleteSharedStorageEntry(ContextInterface $ctx, DeleteSharedStorageEntryRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.deleteSharedStorageEntry', $request);
	}


	public function deleteStorageBucket(ContextInterface $ctx, DeleteStorageBucketRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.deleteStorageBucket', $request);
	}


	public function getAffectedUrlsForThirdPartyCookieMetadata(
		ContextInterface $ctx,
		GetAffectedUrlsForThirdPartyCookieMetadataRequest $request
	): GetAffectedUrlsForThirdPartyCookieMetadataResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getAffectedUrlsForThirdPartyCookieMetadata', $request);
		return GetAffectedUrlsForThirdPartyCookieMetadataResponse::fromJson($response);
	}


	public function getCookies(ContextInterface $ctx, GetCookiesRequest $request): GetCookiesResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getCookies', $request);
		return GetCookiesResponse::fromJson($response);
	}


	public function getInterestGroupDetails(
		ContextInterface $ctx,
		GetInterestGroupDetailsRequest $request
	): GetInterestGroupDetailsResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getInterestGroupDetails', $request);
		return GetInterestGroupDetailsResponse::fromJson($response);
	}


	public function getRelatedWebsiteSets(ContextInterface $ctx): GetRelatedWebsiteSetsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getRelatedWebsiteSets', $request);
		return GetRelatedWebsiteSetsResponse::fromJson($response);
	}


	public function getSharedStorageEntries(
		ContextInterface $ctx,
		GetSharedStorageEntriesRequest $request
	): GetSharedStorageEntriesResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getSharedStorageEntries', $request);
		return GetSharedStorageEntriesResponse::fromJson($response);
	}


	public function getSharedStorageMetadata(
		ContextInterface $ctx,
		GetSharedStorageMetadataRequest $request
	): GetSharedStorageMetadataResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Storage.getSharedStorageMetadata', $request);
		return GetSharedStorageMetadataResponse::fromJson($response);
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


	public function resetSharedStorageBudget(ContextInterface $ctx, ResetSharedStorageBudgetRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.resetSharedStorageBudget', $request);
	}


	public function runBounceTrackingMitigations(ContextInterface $ctx): RunBounceTrackingMitigationsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Storage.runBounceTrackingMitigations', $request);
		return RunBounceTrackingMitigationsResponse::fromJson($response);
	}


	public function sendPendingAttributionReports(ContextInterface $ctx): SendPendingAttributionReportsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Storage.sendPendingAttributionReports', $request);
		return SendPendingAttributionReportsResponse::fromJson($response);
	}


	public function setAttributionReportingLocalTestingMode(
		ContextInterface $ctx,
		SetAttributionReportingLocalTestingModeRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Storage.setAttributionReportingLocalTestingMode', $request);
	}


	public function setAttributionReportingTracking(
		ContextInterface $ctx,
		SetAttributionReportingTrackingRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Storage.setAttributionReportingTracking', $request);
	}


	public function setCookies(ContextInterface $ctx, SetCookiesRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.setCookies', $request);
	}


	public function setInterestGroupAuctionTracking(
		ContextInterface $ctx,
		SetInterestGroupAuctionTrackingRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Storage.setInterestGroupAuctionTracking', $request);
	}


	public function setInterestGroupTracking(ContextInterface $ctx, SetInterestGroupTrackingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.setInterestGroupTracking', $request);
	}


	public function setProtectedAudienceKAnonymity(
		ContextInterface $ctx,
		SetProtectedAudienceKAnonymityRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'Storage.setProtectedAudienceKAnonymity', $request);
	}


	public function setSharedStorageEntry(ContextInterface $ctx, SetSharedStorageEntryRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.setSharedStorageEntry', $request);
	}


	public function setSharedStorageTracking(ContextInterface $ctx, SetSharedStorageTrackingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Storage.setSharedStorageTracking', $request);
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


	public function addAttributionReportingReportSentListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.attributionReportingReportSent', function ($event) use ($listener) {
			return $listener(AttributionReportingReportSentEvent::fromJson($event));
		});
	}


	public function awaitAttributionReportingReportSent(ContextInterface $ctx): AttributionReportingReportSentEvent
	{
		return AttributionReportingReportSentEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.attributionReportingReportSent'));
	}


	public function addAttributionReportingSourceRegisteredListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.attributionReportingSourceRegistered', function ($event) use ($listener) {
			return $listener(AttributionReportingSourceRegisteredEvent::fromJson($event));
		});
	}


	public function awaitAttributionReportingSourceRegistered(ContextInterface $ctx): AttributionReportingSourceRegisteredEvent
	{
		return AttributionReportingSourceRegisteredEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.attributionReportingSourceRegistered'));
	}


	public function addAttributionReportingTriggerRegisteredListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.attributionReportingTriggerRegistered', function ($event) use ($listener) {
			return $listener(AttributionReportingTriggerRegisteredEvent::fromJson($event));
		});
	}


	public function awaitAttributionReportingTriggerRegistered(ContextInterface $ctx): AttributionReportingTriggerRegisteredEvent
	{
		return AttributionReportingTriggerRegisteredEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.attributionReportingTriggerRegistered'));
	}


	public function addAttributionReportingVerboseDebugReportSentListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.attributionReportingVerboseDebugReportSent', function ($event) use ($listener) {
			return $listener(AttributionReportingVerboseDebugReportSentEvent::fromJson($event));
		});
	}


	public function awaitAttributionReportingVerboseDebugReportSent(ContextInterface $ctx): AttributionReportingVerboseDebugReportSentEvent
	{
		return AttributionReportingVerboseDebugReportSentEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.attributionReportingVerboseDebugReportSent'));
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


	public function addInterestGroupAccessedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.interestGroupAccessed', function ($event) use ($listener) {
			return $listener(InterestGroupAccessedEvent::fromJson($event));
		});
	}


	public function awaitInterestGroupAccessed(ContextInterface $ctx): InterestGroupAccessedEvent
	{
		return InterestGroupAccessedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.interestGroupAccessed'));
	}


	public function addInterestGroupAuctionEventOccurredListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.interestGroupAuctionEventOccurred', function ($event) use ($listener) {
			return $listener(InterestGroupAuctionEventOccurredEvent::fromJson($event));
		});
	}


	public function awaitInterestGroupAuctionEventOccurred(ContextInterface $ctx): InterestGroupAuctionEventOccurredEvent
	{
		return InterestGroupAuctionEventOccurredEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.interestGroupAuctionEventOccurred'));
	}


	public function addInterestGroupAuctionNetworkRequestCreatedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.interestGroupAuctionNetworkRequestCreated', function ($event) use ($listener) {
			return $listener(InterestGroupAuctionNetworkRequestCreatedEvent::fromJson($event));
		});
	}


	public function awaitInterestGroupAuctionNetworkRequestCreated(ContextInterface $ctx): InterestGroupAuctionNetworkRequestCreatedEvent
	{
		return InterestGroupAuctionNetworkRequestCreatedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.interestGroupAuctionNetworkRequestCreated'));
	}


	public function addSharedStorageAccessedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.sharedStorageAccessed', function ($event) use ($listener) {
			return $listener(SharedStorageAccessedEvent::fromJson($event));
		});
	}


	public function awaitSharedStorageAccessed(ContextInterface $ctx): SharedStorageAccessedEvent
	{
		return SharedStorageAccessedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.sharedStorageAccessed'));
	}


	public function addSharedStorageWorkletOperationExecutionFinishedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Storage.sharedStorageWorkletOperationExecutionFinished', function ($event) use ($listener) {
			return $listener(SharedStorageWorkletOperationExecutionFinishedEvent::fromJson($event));
		});
	}


	public function awaitSharedStorageWorkletOperationExecutionFinished(ContextInterface $ctx): SharedStorageWorkletOperationExecutionFinishedEvent
	{
		return SharedStorageWorkletOperationExecutionFinishedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Storage.sharedStorageWorkletOperationExecutionFinished'));
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
