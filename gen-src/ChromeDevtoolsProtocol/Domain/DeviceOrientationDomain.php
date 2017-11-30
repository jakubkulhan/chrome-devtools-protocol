<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\DeviceOrientation\SetDeviceOrientationOverrideRequest;

class DeviceOrientationDomain implements DeviceOrientationDomainInterface
{
	/** @var InternalClientInterface */
	public $internalClient;


	public function __construct(InternalClientInterface $internalClient)
	{
		$this->internalClient = $internalClient;
	}


	public function clearDeviceOrientationOverride(ContextInterface $ctx): void
	{
		$request = new \stdClass();
		$this->internalClient->executeCommand($ctx, 'DeviceOrientation.clearDeviceOrientationOverride', $request);
	}


	public function setDeviceOrientationOverride(ContextInterface $ctx, SetDeviceOrientationOverrideRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'DeviceOrientation.setDeviceOrientationOverride', $request);
	}
}
