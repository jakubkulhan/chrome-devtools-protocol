<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\EnableRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\GattOperationReceivedEvent;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SetSimulatedCentralStateRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulateAdvertisementRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulateGATTOperationResponseRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulatePreconnectedPeripheralRequest;
use ChromeDevtoolsProtocol\SubscriptionInterface;

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


	public function setSimulatedCentralState(ContextInterface $ctx, SetSimulatedCentralStateRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.setSimulatedCentralState', $request);
	}


	public function simulateAdvertisement(ContextInterface $ctx, SimulateAdvertisementRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.simulateAdvertisement', $request);
	}


	public function simulateGATTOperationResponse(
		ContextInterface $ctx,
		SimulateGATTOperationResponseRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.simulateGATTOperationResponse', $request);
	}


	public function simulatePreconnectedPeripheral(
		ContextInterface $ctx,
		SimulatePreconnectedPeripheralRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.simulatePreconnectedPeripheral', $request);
	}


	public function addGattOperationReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('BluetoothEmulation.gattOperationReceived', function ($event) use ($listener) {
			return $listener(GattOperationReceivedEvent::fromJson($event));
		});
	}


	public function awaitGattOperationReceived(ContextInterface $ctx): GattOperationReceivedEvent
	{
		return GattOperationReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'BluetoothEmulation.gattOperationReceived'));
	}
}
