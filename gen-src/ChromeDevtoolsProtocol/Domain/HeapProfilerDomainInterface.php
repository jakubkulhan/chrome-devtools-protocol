<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
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

/**
 * HeapProfiler domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface HeapProfilerDomainInterface
{
	/**
	 * Call HeapProfiler.enable command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx): void;


	/**
	 * Call HeapProfiler.disable command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Call HeapProfiler.startTrackingHeapObjects command.
	 *
	 * @param ContextInterface $ctx
	 * @param StartTrackingHeapObjectsRequest $request
	 *
	 * @return void
	 */
	public function startTrackingHeapObjects(ContextInterface $ctx, StartTrackingHeapObjectsRequest $request): void;


	/**
	 * Call HeapProfiler.stopTrackingHeapObjects command.
	 *
	 * @param ContextInterface $ctx
	 * @param StopTrackingHeapObjectsRequest $request
	 *
	 * @return void
	 */
	public function stopTrackingHeapObjects(ContextInterface $ctx, StopTrackingHeapObjectsRequest $request): void;


	/**
	 * Call HeapProfiler.takeHeapSnapshot command.
	 *
	 * @param ContextInterface $ctx
	 * @param TakeHeapSnapshotRequest $request
	 *
	 * @return void
	 */
	public function takeHeapSnapshot(ContextInterface $ctx, TakeHeapSnapshotRequest $request): void;


	/**
	 * Call HeapProfiler.collectGarbage command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function collectGarbage(ContextInterface $ctx): void;


	/**
	 * Call HeapProfiler.getObjectByHeapObjectId command.
	 *
	 * @param ContextInterface $ctx
	 * @param GetObjectByHeapObjectIdRequest $request
	 *
	 * @return GetObjectByHeapObjectIdResponse
	 */
	public function getObjectByHeapObjectId(ContextInterface $ctx, GetObjectByHeapObjectIdRequest $request): GetObjectByHeapObjectIdResponse;


	/**
	 * Enables console to refer to the node with given id via $x (see Command Line API for more details $x functions).
	 *
	 * @param ContextInterface $ctx
	 * @param AddInspectedHeapObjectRequest $request
	 *
	 * @return void
	 */
	public function addInspectedHeapObject(ContextInterface $ctx, AddInspectedHeapObjectRequest $request): void;


	/**
	 * Call HeapProfiler.getHeapObjectId command.
	 *
	 * @param ContextInterface $ctx
	 * @param GetHeapObjectIdRequest $request
	 *
	 * @return GetHeapObjectIdResponse
	 */
	public function getHeapObjectId(ContextInterface $ctx, GetHeapObjectIdRequest $request): GetHeapObjectIdResponse;


	/**
	 * Call HeapProfiler.startSampling command.
	 *
	 * @param ContextInterface $ctx
	 * @param StartSamplingRequest $request
	 *
	 * @return void
	 */
	public function startSampling(ContextInterface $ctx, StartSamplingRequest $request): void;


	/**
	 * Call HeapProfiler.stopSampling command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return StopSamplingResponse
	 */
	public function stopSampling(ContextInterface $ctx): StopSamplingResponse;


	/**
	 * Call HeapProfiler.getSamplingProfile command.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetSamplingProfileResponse
	 */
	public function getSamplingProfile(ContextInterface $ctx): GetSamplingProfileResponse;


	/**
	 * Subscribe to HeapProfiler.addHeapSnapshotChunk event.
	 *
	 * Listener will be called whenever event HeapProfiler.addHeapSnapshotChunk is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addAddHeapSnapshotChunkListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for HeapProfiler.addHeapSnapshotChunk event.
	 *
	 * Method will block until first HeapProfiler.addHeapSnapshotChunk event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return AddHeapSnapshotChunkEvent
	 */
	public function awaitAddHeapSnapshotChunk(ContextInterface $ctx): AddHeapSnapshotChunkEvent;


	/**
	 * Subscribe to HeapProfiler.resetProfiles event.
	 *
	 * Listener will be called whenever event HeapProfiler.resetProfiles is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addResetProfilesListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for HeapProfiler.resetProfiles event.
	 *
	 * Method will block until first HeapProfiler.resetProfiles event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ResetProfilesEvent
	 */
	public function awaitResetProfiles(ContextInterface $ctx): ResetProfilesEvent;


	/**
	 * Subscribe to HeapProfiler.reportHeapSnapshotProgress event.
	 *
	 * Listener will be called whenever event HeapProfiler.reportHeapSnapshotProgress is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addReportHeapSnapshotProgressListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for HeapProfiler.reportHeapSnapshotProgress event.
	 *
	 * Method will block until first HeapProfiler.reportHeapSnapshotProgress event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return ReportHeapSnapshotProgressEvent
	 */
	public function awaitReportHeapSnapshotProgress(ContextInterface $ctx): ReportHeapSnapshotProgressEvent;


	/**
	 * If heap objects tracking has been started then backend regularly sends a current value for last seen object id and corresponding timestamp. If the were changes in the heap since last event then one or more heapStatsUpdate events will be sent before a new lastSeenObjectId event.
	 *
	 * Listener will be called whenever event HeapProfiler.lastSeenObjectId is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addLastSeenObjectIdListener(callable $listener): SubscriptionInterface;


	/**
	 * If heap objects tracking has been started then backend regularly sends a current value for last seen object id and corresponding timestamp. If the were changes in the heap since last event then one or more heapStatsUpdate events will be sent before a new lastSeenObjectId event.
	 *
	 * Method will block until first HeapProfiler.lastSeenObjectId event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return LastSeenObjectIdEvent
	 */
	public function awaitLastSeenObjectId(ContextInterface $ctx): LastSeenObjectIdEvent;


	/**
	 * If heap objects tracking has been started then backend may send update for one or more fragments
	 *
	 * Listener will be called whenever event HeapProfiler.heapStatsUpdate is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addHeapStatsUpdateListener(callable $listener): SubscriptionInterface;


	/**
	 * If heap objects tracking has been started then backend may send update for one or more fragments
	 *
	 * Method will block until first HeapProfiler.heapStatsUpdate event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return HeapStatsUpdateEvent
	 */
	public function awaitHeapStatsUpdate(ContextInterface $ctx): HeapStatsUpdateEvent;
}
