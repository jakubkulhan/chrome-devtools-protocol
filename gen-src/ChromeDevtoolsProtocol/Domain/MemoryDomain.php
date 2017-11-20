<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\Memory\GetDOMCountersResponse;
use ChromeDevtoolsProtocol\Model\Memory\SetPressureNotificationsSuppressedRequest;
use ChromeDevtoolsProtocol\Model\Memory\SimulatePressureNotificationRequest;

class MemoryDomain implements MemoryDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function getDOMCounters(ContextInterface $ctx): GetDOMCountersResponse
	{
		$request = new \stdClass();
		$response = $this->internalClient->executeCommand($ctx, 'Memory.getDOMCounters', $request);
		return GetDOMCountersResponse::fromJson($response);
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
}
