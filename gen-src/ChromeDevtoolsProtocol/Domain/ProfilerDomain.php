<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Profiler\ConsoleProfileFinishedEvent;
use ChromeDevtoolsProtocol\Model\Profiler\ConsoleProfileStartedEvent;
use ChromeDevtoolsProtocol\Model\Profiler\GetBestEffortCoverageResponse;
use ChromeDevtoolsProtocol\Model\Profiler\GetCountersResponse;
use ChromeDevtoolsProtocol\Model\Profiler\GetRuntimeCallStatsResponse;
use ChromeDevtoolsProtocol\Model\Profiler\PreciseCoverageDeltaUpdateEvent;
use ChromeDevtoolsProtocol\Model\Profiler\SetSamplingIntervalRequest;
use ChromeDevtoolsProtocol\Model\Profiler\StartPreciseCoverageRequest;
use ChromeDevtoolsProtocol\Model\Profiler\StartPreciseCoverageResponse;
use ChromeDevtoolsProtocol\Model\Profiler\StopResponse;
use ChromeDevtoolsProtocol\Model\Profiler\TakePreciseCoverageResponse;
use ChromeDevtoolsProtocol\Model\Profiler\TakeTypeProfileResponse;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class ProfilerDomain implements ProfilerDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Profiler.disable', $request);
	}


	public function disableCounters(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Profiler.disableCounters', $request);
	}


	public function disableRuntimeCallStats(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Profiler.disableRuntimeCallStats', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Profiler.enable', $request);
	}


	public function enableCounters(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Profiler.enableCounters', $request);
	}


	public function enableRuntimeCallStats(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Profiler.enableRuntimeCallStats', $request);
	}


	public function getBestEffortCoverage(ContextInterface $ctx): GetBestEffortCoverageResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Profiler.getBestEffortCoverage', $request);
		return GetBestEffortCoverageResponse::fromJson($response);
	}


	public function getCounters(ContextInterface $ctx): GetCountersResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Profiler.getCounters', $request);
		return GetCountersResponse::fromJson($response);
	}


	public function getRuntimeCallStats(ContextInterface $ctx): GetRuntimeCallStatsResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Profiler.getRuntimeCallStats', $request);
		return GetRuntimeCallStatsResponse::fromJson($response);
	}


	public function setSamplingInterval(ContextInterface $ctx, SetSamplingIntervalRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Profiler.setSamplingInterval', $request);
	}


	public function start(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Profiler.start', $request);
	}


	public function startPreciseCoverage(
		ContextInterface $ctx,
		StartPreciseCoverageRequest $request
	): StartPreciseCoverageResponse {
		$response = $this->internalClient->executeCommand($ctx, 'Profiler.startPreciseCoverage', $request);
		return StartPreciseCoverageResponse::fromJson($response);
	}


	public function startTypeProfile(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Profiler.startTypeProfile', $request);
	}


	public function stop(ContextInterface $ctx): StopResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Profiler.stop', $request);
		return StopResponse::fromJson($response);
	}


	public function stopPreciseCoverage(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Profiler.stopPreciseCoverage', $request);
	}


	public function stopTypeProfile(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Profiler.stopTypeProfile', $request);
	}


	public function takePreciseCoverage(ContextInterface $ctx): TakePreciseCoverageResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Profiler.takePreciseCoverage', $request);
		return TakePreciseCoverageResponse::fromJson($response);
	}


	public function takeTypeProfile(ContextInterface $ctx): TakeTypeProfileResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Profiler.takeTypeProfile', $request);
		return TakeTypeProfileResponse::fromJson($response);
	}


	public function addConsoleProfileFinishedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Profiler.consoleProfileFinished', function ($event) use ($listener) {
			return $listener(ConsoleProfileFinishedEvent::fromJson($event));
		});
	}


	public function awaitConsoleProfileFinished(ContextInterface $ctx): ConsoleProfileFinishedEvent
	{
		return ConsoleProfileFinishedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Profiler.consoleProfileFinished'));
	}


	public function addConsoleProfileStartedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Profiler.consoleProfileStarted', function ($event) use ($listener) {
			return $listener(ConsoleProfileStartedEvent::fromJson($event));
		});
	}


	public function awaitConsoleProfileStarted(ContextInterface $ctx): ConsoleProfileStartedEvent
	{
		return ConsoleProfileStartedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Profiler.consoleProfileStarted'));
	}


	public function addPreciseCoverageDeltaUpdateListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('Profiler.preciseCoverageDeltaUpdate', function ($event) use ($listener) {
			return $listener(PreciseCoverageDeltaUpdateEvent::fromJson($event));
		});
	}


	public function awaitPreciseCoverageDeltaUpdate(ContextInterface $ctx): PreciseCoverageDeltaUpdateEvent
	{
		return PreciseCoverageDeltaUpdateEvent::fromJson($this->internalClient->awaitEvent($ctx, 'Profiler.preciseCoverageDeltaUpdate'));
	}
}
