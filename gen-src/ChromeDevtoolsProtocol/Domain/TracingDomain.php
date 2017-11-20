<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Tracing\BufferUsageEvent;
use ChromeDevtoolsProtocol\Model\Tracing\DataCollectedEvent;
use ChromeDevtoolsProtocol\Model\Tracing\GetCategoriesResponse;
use ChromeDevtoolsProtocol\Model\Tracing\RecordClockSyncMarkerRequest;
use ChromeDevtoolsProtocol\Model\Tracing\RequestMemoryDumpResponse;
use ChromeDevtoolsProtocol\Model\Tracing\StartRequest;
use ChromeDevtoolsProtocol\Model\Tracing\TracingCompleteEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class TracingDomain implements TracingDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function start(ContextInterface $ctx, StartRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Tracing.start', $request);
	}


	public function end(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Tracing.end', $request);
	}


	public function getCategories(ContextInterface $ctx): GetCategoriesResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Tracing.getCategories', $request);
		return GetCategoriesResponse::fromJson($response);
	}


	public function requestMemoryDump(ContextInterface $ctx): RequestMemoryDumpResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Tracing.requestMemoryDump', $request);
		return RequestMemoryDumpResponse::fromJson($response);
	}


	public function recordClockSyncMarker(ContextInterface $ctx, RecordClockSyncMarkerRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Tracing.recordClockSyncMarker', $request);
	}


	public function addDataCollectedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Tracing.dataCollected', $listener);
	}


	public function awaitDataCollected(ContextInterface $ctx): DataCollectedEvent
	{
		return DataCollectedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Tracing.dataCollected'));
	}


	public function addTracingCompleteListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Tracing.tracingComplete', $listener);
	}


	public function awaitTracingComplete(ContextInterface $ctx): TracingCompleteEvent
	{
		return TracingCompleteEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Tracing.tracingComplete'));
	}


	public function addBufferUsageListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Tracing.bufferUsage', $listener);
	}


	public function awaitBufferUsage(ContextInterface $ctx): BufferUsageEvent
	{
		return BufferUsageEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Tracing.bufferUsage'));
	}
}
