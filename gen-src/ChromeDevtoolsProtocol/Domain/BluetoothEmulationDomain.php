<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\EnableRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulateAdvertisementRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulatePreconnectedPeripheralRequest;

class BluetoothEmulationDomain implements BluetoothEmulationDomainInterface
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
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.disable', $request);
	}


	public function enable(ContextInterface $ctx, EnableRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.enable', $request);
	}


	public function simulateAdvertisement(ContextInterface $ctx, SimulateAdvertisementRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.simulateAdvertisement', $request);
	}


	public function simulatePreconnectedPeripheral(
		ContextInterface $ctx,
		SimulatePreconnectedPeripheralRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.simulatePreconnectedPeripheral', $request);
	}
}
