<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\HeapProfiler\AddHeapSnapshotChunkEvent;
use ChromeDevtoolsProtocol\Model\HeapProfiler\AddInspectedHeapObjectRequest;
use ChromeDevtoolsProtocol\Model\HeapProfiler\GetHeapObjectIdRequest;
use ChromeDevtoolsProtocol\Model\HeapProfiler\GetHeapObjectIdResponse;
use ChromeDevtoolsProtocol\Model\HeapProfiler\GetObjectByHeapObjectIdRequest;
use ChromeDevtoolsProtocol\Model\HeapProfiler\GetObjectByHeapObjectIdResponse;
use ChromeDevtoolsProtocol\Model\HeapProfiler\GetSamplingProfileResponse;
use ChromeDevtoolsProtocol\Model\HeapProfiler\HeapStatsUpdateEvent;
use ChromeDevtoolsProtocol\Model\HeapProfiler\LastSeenObjectIdEvent;
use ChromeDevtoolsProtocol\Model\HeapProfiler\ReportHeapSnapshotProgressEvent;
use ChromeDevtoolsProtocol\Model\HeapProfiler\ResetProfilesEvent;
use ChromeDevtoolsProtocol\Model\HeapProfiler\StartSamplingRequest;
use ChromeDevtoolsProtocol\Model\HeapProfiler\StartTrackingHeapObjectsRequest;
use ChromeDevtoolsProtocol\Model\HeapProfiler\StopSamplingResponse;
use ChromeDevtoolsProtocol\Model\HeapProfiler\StopTrackingHeapObjectsRequest;
use ChromeDevtoolsProtocol\Model\HeapProfiler\TakeHeapSnapshotRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class HeapProfilerDomain implements HeapProfilerDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function addInspectedHeapObject(ContextInterface $ctx, AddInspectedHeapObjectRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'HeapProfiler.addInspectedHeapObject', $request);
	}


	public function collectGarbage(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'HeapProfiler.collectGarbage', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'HeapProfiler.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'HeapProfiler.enable', $request);
	}


	public function getHeapObjectId(ContextInterface $ctx, GetHeapObjectIdRequest $request): GetHeapObjectIdResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'HeapProfiler.getHeapObjectId', $request);
		return GetHeapObjectIdResponse::fromJson($response);
	}


	public function getObjectByHeapObjectId(
		ContextInterface $ctx,
		GetObjectByHeapObjectIdRequest $request
	): GetObjectByHeapObjectIdResponse {
		$response = $this->internalClient->executeCommand($ctx, 'HeapProfiler.getObjectByHeapObjectId', $request);
		return GetObjectByHeapObjectIdResponse::fromJson($response);
	}


	public function getSamplingProfile(ContextInterface $ctx): GetSamplingProfileResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'HeapProfiler.getSamplingProfile', $request);
		return GetSamplingProfileResponse::fromJson($response);
	}


	public function startSampling(ContextInterface $ctx, StartSamplingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'HeapProfiler.startSampling', $request);
	}


	public function startTrackingHeapObjects(ContextInterface $ctx, StartTrackingHeapObjectsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'HeapProfiler.startTrackingHeapObjects', $request);
	}


	public function stopSampling(ContextInterface $ctx): StopSamplingResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'HeapProfiler.stopSampling', $request);
		return StopSamplingResponse::fromJson($response);
	}


	public function stopTrackingHeapObjects(ContextInterface $ctx, StopTrackingHeapObjectsRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'HeapProfiler.stopTrackingHeapObjects', $request);
	}


	public function takeHeapSnapshot(ContextInterface $ctx, TakeHeapSnapshotRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'HeapProfiler.takeHeapSnapshot', $request);
	}


	public function addAddHeapSnapshotChunkListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('HeapProfiler.addHeapSnapshotChunk', function ($event) use ($listener) {
			return $listener(AddHeapSnapshotChunkEvent::fromJson($event));
		});
	}


	public function awaitAddHeapSnapshotChunk(ContextInterface $ctx): AddHeapSnapshotChunkEvent
	{
		return AddHeapSnapshotChunkEvent::fromJson($this->internalClient->awaitEvent($ctx, 'HeapProfiler.addHeapSnapshotChunk'));
	}


	public function addHeapStatsUpdateListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('HeapProfiler.heapStatsUpdate', function ($event) use ($listener) {
			return $listener(HeapStatsUpdateEvent::fromJson($event));
		});
	}


	public function awaitHeapStatsUpdate(ContextInterface $ctx): HeapStatsUpdateEvent
	{
		return HeapStatsUpdateEvent::fromJson($this->internalClient->awaitEvent($ctx, 'HeapProfiler.heapStatsUpdate'));
	}


	public function addLastSeenObjectIdListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('HeapProfiler.lastSeenObjectId', function ($event) use ($listener) {
			return $listener(LastSeenObjectIdEvent::fromJson($event));
		});
	}


	public function awaitLastSeenObjectId(ContextInterface $ctx): LastSeenObjectIdEvent
	{
		return LastSeenObjectIdEvent::fromJson($this->internalClient->awaitEvent($ctx, 'HeapProfiler.lastSeenObjectId'));
	}


	public function addReportHeapSnapshotProgressListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('HeapProfiler.reportHeapSnapshotProgress', function ($event) use ($listener) {
			return $listener(ReportHeapSnapshotProgressEvent::fromJson($event));
		});
	}


	public function awaitReportHeapSnapshotProgress(ContextInterface $ctx): ReportHeapSnapshotProgressEvent
	{
		return ReportHeapSnapshotProgressEvent::fromJson($this->internalClient->awaitEvent($ctx, 'HeapProfiler.reportHeapSnapshotProgress'));
	}


	public function addResetProfilesListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('HeapProfiler.resetProfiles', function ($event) use ($listener) {
			return $listener(ResetProfilesEvent::fromJson($event));
		});
	}


	public function awaitResetProfiles(ContextInterface $ctx): ResetProfilesEvent
	{
		return ResetProfilesEvent::fromJson($this->internalClient->awaitEvent($ctx, 'HeapProfiler.resetProfiles'));
	}
}
