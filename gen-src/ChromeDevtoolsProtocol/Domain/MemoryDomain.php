<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Memory\GetAllTimeSamplingProfileResponse;
use ChromeDevtoolsProtocol\Model\Memory\GetBrowserSamplingProfileResponse;
use ChromeDevtoolsProtocol\Model\Memory\GetDOMCountersResponse;
use ChromeDevtoolsProtocol\Model\Memory\GetSamplingProfileResponse;
use ChromeDevtoolsProtocol\Model\Memory\SetPressureNotificationsSuppressedRequest;
use ChromeDevtoolsProtocol\Model\Memory\SimulatePressureNotificationRequest;
use ChromeDevtoolsProtocol\Model\Memory\StartSamplingRequest;

class MemoryDomain implements MemoryDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function forciblyPurgeJavaScriptMemory(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Memory.forciblyPurgeJavaScriptMemory', $request);
	}


	public function getAllTimeSamplingProfile(ContextInterface $ctx): GetAllTimeSamplingProfileResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Memory.getAllTimeSamplingProfile', $request);
		return GetAllTimeSamplingProfileResponse::fromJson($response);
	}


	public function getBrowserSamplingProfile(ContextInterface $ctx): GetBrowserSamplingProfileResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Memory.getBrowserSamplingProfile', $request);
		return GetBrowserSamplingProfileResponse::fromJson($response);
	}


	public function getDOMCounters(ContextInterface $ctx): GetDOMCountersResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Memory.getDOMCounters', $request);
		return GetDOMCountersResponse::fromJson($response);
	}


	public function getSamplingProfile(ContextInterface $ctx): GetSamplingProfileResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Memory.getSamplingProfile', $request);
		return GetSamplingProfileResponse::fromJson($response);
	}


	public function prepareForLeakDetection(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Memory.prepareForLeakDetection', $request);
	}


	public function setPressureNotificationsSuppressed(ContextInterface $ctx, SetPressureNotificationsSuppressedRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Memory.setPressureNotificationsSuppressed', $request);
	}


	public function simulatePressureNotification(ContextInterface $ctx, SimulatePressureNotificationRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Memory.simulatePressureNotification', $request);
	}


	public function startSampling(ContextInterface $ctx, StartSamplingRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'Memory.startSampling', $request);
	}


	public function stopSampling(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'Memory.stopSampling', $request);
	}
}
