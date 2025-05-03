<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\InternalClientInterface;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\AddCharacteristicRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\AddCharacteristicResponse;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\AddDescriptorRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\AddDescriptorResponse;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\AddServiceRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\AddServiceResponse;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\CharacteristicOperationReceivedEvent;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\DescriptorOperationReceivedEvent;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\EnableRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\GattOperationReceivedEvent;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\RemoveCharacteristicRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\RemoveDescriptorRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\RemoveServiceRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SetSimulatedCentralStateRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulateAdvertisementRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulateCharacteristicOperationResponseRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulateDescriptorOperationResponseRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulateGATTDisconnectionRequest;
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


	public function addCharacteristic(ContextInterface $ctx, AddCharacteristicRequest $request): AddCharacteristicResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'BluetoothEmulation.addCharacteristic', $request);
		return AddCharacteristicResponse::fromJson($response);
	}


	public function addDescriptor(ContextInterface $ctx, AddDescriptorRequest $request): AddDescriptorResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'BluetoothEmulation.addDescriptor', $request);
		return AddDescriptorResponse::fromJson($response);
	}


	public function addService(ContextInterface $ctx, AddServiceRequest $request): AddServiceResponse
	{
		$response = $this->internalClient->executeCommand($ctx, 'BluetoothEmulation.addService', $request);
		return AddServiceResponse::fromJson($response);
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


	public function removeCharacteristic(ContextInterface $ctx, RemoveCharacteristicRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.removeCharacteristic', $request);
	}


	public function removeDescriptor(ContextInterface $ctx, RemoveDescriptorRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.removeDescriptor', $request);
	}


	public function removeService(ContextInterface $ctx, RemoveServiceRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.removeService', $request);
	}


	public function setSimulatedCentralState(ContextInterface $ctx, SetSimulatedCentralStateRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.setSimulatedCentralState', $request);
	}


	public function simulateAdvertisement(ContextInterface $ctx, SimulateAdvertisementRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.simulateAdvertisement', $request);
	}


	public function simulateCharacteristicOperationResponse(
		ContextInterface $ctx,
		SimulateCharacteristicOperationResponseRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.simulateCharacteristicOperationResponse', $request);
	}


	public function simulateDescriptorOperationResponse(
		ContextInterface $ctx,
		SimulateDescriptorOperationResponseRequest $request
	): void {
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.simulateDescriptorOperationResponse', $request);
	}


	public function simulateGATTDisconnection(ContextInterface $ctx, SimulateGATTDisconnectionRequest $request): void
	{
		$this->internalClient->executeCommand($ctx, 'BluetoothEmulation.simulateGATTDisconnection', $request);
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


	public function addCharacteristicOperationReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('BluetoothEmulation.characteristicOperationReceived', function ($event) use ($listener) {
			return $listener(CharacteristicOperationReceivedEvent::fromJson($event));
		});
	}


	public function awaitCharacteristicOperationReceived(ContextInterface $ctx): CharacteristicOperationReceivedEvent
	{
		return CharacteristicOperationReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'BluetoothEmulation.characteristicOperationReceived'));
	}


	public function addDescriptorOperationReceivedListener(callable $listener): SubscriptionInterface
	{
		return $this->internalClient->addListener('BluetoothEmulation.descriptorOperationReceived', function ($event) use ($listener) {
			return $listener(DescriptorOperationReceivedEvent::fromJson($event));
		});
	}


	public function awaitDescriptorOperationReceived(ContextInterface $ctx): DescriptorOperationReceivedEvent
	{
		return DescriptorOperationReceivedEvent::fromJson($this->internalClient->awaitEvent($ctx, 'BluetoothEmulation.descriptorOperationReceived'));
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
