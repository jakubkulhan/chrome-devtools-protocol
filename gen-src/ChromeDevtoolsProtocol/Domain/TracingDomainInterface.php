<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Tracing\BufferUsageEvent;
use ChromeDevtoolsProtocol\Model\Tracing\DataCollectedEvent;
use ChromeDevtoolsProtocol\Model\Tracing\GetCategoriesResponse;
use ChromeDevtoolsProtocol\Model\Tracing\RecordClockSyncMarkerRequest;
use ChromeDevtoolsProtocol\Model\Tracing\RequestMemoryDumpRequest;
use ChromeDevtoolsProtocol\Model\Tracing\RequestMemoryDumpResponse;
use ChromeDevtoolsProtocol\Model\Tracing\StartRequest;
use ChromeDevtoolsProtocol\Model\Tracing\TracingCompleteEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * Tracing domain.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface TracingDomainInterface
{
	/**
	 * Stop trace events collection.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function end(ContextInterface $ctx): void;


	/**
	 * Gets supported tracing categories.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GetCategoriesResponse
	 */
	public function getCategories(ContextInterface $ctx): GetCategoriesResponse;


	/**
	 * Record a clock sync marker in the trace.
	 *
	 * @param ContextInterface $ctx
	 * @param RecordClockSyncMarkerRequest $request
	 *
	 * @return void
	 */
	public function recordClockSyncMarker(ContextInterface $ctx, RecordClockSyncMarkerRequest $request): void;


	/**
	 * Request a global memory dump.
	 *
	 * @param ContextInterface $ctx
	 * @param RequestMemoryDumpRequest $request
	 *
	 * @return RequestMemoryDumpResponse
	 */
	public function requestMemoryDump(ContextInterface $ctx, RequestMemoryDumpRequest $request): RequestMemoryDumpResponse;


	/**
	 * Start trace events collection.
	 *
	 * @param ContextInterface $ctx
	 * @param StartRequest $request
	 *
	 * @return void
	 */
	public function start(ContextInterface $ctx, StartRequest $request): void;


	/**
	 * Subscribe to Tracing.bufferUsage event.
	 *
	 * Listener will be called whenever event Tracing.bufferUsage is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addBufferUsageListener(callable $listener): SubscriptionInterface;


	/**
	 * Wait for Tracing.bufferUsage event.
	 *
	 * Method will block until first Tracing.bufferUsage event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return BufferUsageEvent
	 */
	public function awaitBufferUsage(ContextInterface $ctx): BufferUsageEvent;


	/**
	 * Contains a bucket of collected trace events. When tracing is stopped collected events will be sent as a sequence of dataCollected events followed by tracingComplete event.
	 *
	 * Listener will be called whenever event Tracing.dataCollected is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDataCollectedListener(callable $listener): SubscriptionInterface;


	/**
	 * Contains a bucket of collected trace events. When tracing is stopped collected events will be sent as a sequence of dataCollected events followed by tracingComplete event.
	 *
	 * Method will block until first Tracing.dataCollected event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DataCollectedEvent
	 */
	public function awaitDataCollected(ContextInterface $ctx): DataCollectedEvent;


	/**
	 * Signals that tracing is stopped and there is no trace buffers pending flush, all data were delivered via dataCollected events.
	 *
	 * Listener will be called whenever event Tracing.tracingComplete is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addTracingCompleteListener(callable $listener): SubscriptionInterface;


	/**
	 * Signals that tracing is stopped and there is no trace buffers pending flush, all data were delivered via dataCollected events.
	 *
	 * Method will block until first Tracing.tracingComplete event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return TracingCompleteEvent
	 */
	public function awaitTracingComplete(ContextInterface $ctx): TracingCompleteEvent;
}
