<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\DeviceAccess\CancelPromptRequest;
use ChromeDevtoolsProtocol\Model\DeviceAccess\DeviceRequestPromptedEvent;
use ChromeDevtoolsProtocol\Model\DeviceAccess\SelectPromptRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

class DeviceAccessDomain implements DeviceAccessDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function cancelPrompt(ContextInterface $ctx, CancelPromptRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DeviceAccess.cancelPrompt', $request);
	}


	public function disable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DeviceAccess.disable', $request);
	}


	public function enable(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DeviceAccess.enable', $request);
	}


	public function selectPrompt(ContextInterface $ctx, SelectPromptRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DeviceAccess.selectPrompt', $request);
	}


	public function addDeviceRequestPromptedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('DeviceAccess.deviceRequestPrompted', function ($event) use ($listener) {
			return $listener(DeviceRequestPromptedEvent::fromJson($event));
		});
	}


	public function awaitDeviceRequestPrompted(ContextInterface $ctx): DeviceRequestPromptedEvent
	{
		return DeviceRequestPromptedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'DeviceAccess.deviceRequestPrompted'));
	}
}
