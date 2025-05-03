<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
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

/**
 * This domain allows configuring virtual Bluetooth devices to test the web-bluetooth API.
 *
 * @experimental
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface BluetoothEmulationDomainInterface
{
	/**
	 * Adds a characteristic with |characteristicUuid| and |properties| to the service represented by |serviceId|.
	 *
	 * @param ContextInterface $ctx
	 * @param AddCharacteristicRequest $request
	 *
	 * @return AddCharacteristicResponse
	 */
	public function addCharacteristic(ContextInterface $ctx, AddCharacteristicRequest $request): AddCharacteristicResponse;


	/**
	 * Adds a descriptor with |descriptorUuid| to the characteristic respresented by |characteristicId|.
	 *
	 * @param ContextInterface $ctx
	 * @param AddDescriptorRequest $request
	 *
	 * @return AddDescriptorResponse
	 */
	public function addDescriptor(ContextInterface $ctx, AddDescriptorRequest $request): AddDescriptorResponse;


	/**
	 * Adds a service with |serviceUuid| to the peripheral with |address|.
	 *
	 * @param ContextInterface $ctx
	 * @param AddServiceRequest $request
	 *
	 * @return AddServiceResponse
	 */
	public function addService(ContextInterface $ctx, AddServiceRequest $request): AddServiceResponse;


	/**
	 * Disable the BluetoothEmulation domain.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function disable(ContextInterface $ctx): void;


	/**
	 * Enable the BluetoothEmulation domain.
	 *
	 * @param ContextInterface $ctx
	 * @param EnableRequest $request
	 *
	 * @return void
	 */
	public function enable(ContextInterface $ctx, EnableRequest $request): void;


	/**
	 * Removes the characteristic respresented by |characteristicId| from the simulated central.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveCharacteristicRequest $request
	 *
	 * @return void
	 */
	public function removeCharacteristic(ContextInterface $ctx, RemoveCharacteristicRequest $request): void;


	/**
	 * Removes the descriptor with |descriptorId| from the simulated central.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveDescriptorRequest $request
	 *
	 * @return void
	 */
	public function removeDescriptor(ContextInterface $ctx, RemoveDescriptorRequest $request): void;


	/**
	 * Removes the service respresented by |serviceId| from the simulated central.
	 *
	 * @param ContextInterface $ctx
	 * @param RemoveServiceRequest $request
	 *
	 * @return void
	 */
	public function removeService(ContextInterface $ctx, RemoveServiceRequest $request): void;


	/**
	 * Set the state of the simulated central.
	 *
	 * @param ContextInterface $ctx
	 * @param SetSimulatedCentralStateRequest $request
	 *
	 * @return void
	 */
	public function setSimulatedCentralState(ContextInterface $ctx, SetSimulatedCentralStateRequest $request): void;


	/**
	 * Simulates an advertisement packet described in |entry| being received by the central.
	 *
	 * @param ContextInterface $ctx
	 * @param SimulateAdvertisementRequest $request
	 *
	 * @return void
	 */
	public function simulateAdvertisement(ContextInterface $ctx, SimulateAdvertisementRequest $request): void;


	/**
	 * Simulates the response from the characteristic with |characteristicId| for a characteristic operation of |type|. The |code| value follows the Error Codes from Bluetooth Core Specification Vol 3 Part F 3.4.1.1 Error Response. The |data| is expected to exist when simulating a successful read operation response.
	 *
	 * @param ContextInterface $ctx
	 * @param SimulateCharacteristicOperationResponseRequest $request
	 *
	 * @return void
	 */
	public function simulateCharacteristicOperationResponse(
		ContextInterface $ctx,
		SimulateCharacteristicOperationResponseRequest $request
	): void;


	/**
	 * Simulates the response from the descriptor with |descriptorId| for a descriptor operation of |type|. The |code| value follows the Error Codes from Bluetooth Core Specification Vol 3 Part F 3.4.1.1 Error Response. The |data| is expected to exist when simulating a successful read operation response.
	 *
	 * @param ContextInterface $ctx
	 * @param SimulateDescriptorOperationResponseRequest $request
	 *
	 * @return void
	 */
	public function simulateDescriptorOperationResponse(
		ContextInterface $ctx,
		SimulateDescriptorOperationResponseRequest $request
	): void;


	/**
	 * Simulates a GATT disconnection from the peripheral with |address|.
	 *
	 * @param ContextInterface $ctx
	 * @param SimulateGATTDisconnectionRequest $request
	 *
	 * @return void
	 */
	public function simulateGATTDisconnection(ContextInterface $ctx, SimulateGATTDisconnectionRequest $request): void;


	/**
	 * Simulates the response code from the peripheral with |address| for a GATT operation of |type|. The |code| value follows the HCI Error Codes from Bluetooth Core Specification Vol 2 Part D 1.3 List Of Error Codes.
	 *
	 * @param ContextInterface $ctx
	 * @param SimulateGATTOperationResponseRequest $request
	 *
	 * @return void
	 */
	public function simulateGATTOperationResponse(
		ContextInterface $ctx,
		SimulateGATTOperationResponseRequest $request
	): void;


	/**
	 * Simulates a peripheral with |address|, |name| and |knownServiceUuids| that has already been connected to the system.
	 *
	 * @param ContextInterface $ctx
	 * @param SimulatePreconnectedPeripheralRequest $request
	 *
	 * @return void
	 */
	public function simulatePreconnectedPeripheral(
		ContextInterface $ctx,
		SimulatePreconnectedPeripheralRequest $request
	): void;


	/**
	 * Event for when a characteristic operation of |type| to the characteristic respresented by |characteristicId| happened. |data| and |writeType| is expected to exist when |type| is write.
	 *
	 * Listener will be called whenever event BluetoothEmulation.characteristicOperationReceived is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addCharacteristicOperationReceivedListener(callable $listener): SubscriptionInterface;


	/**
	 * Event for when a characteristic operation of |type| to the characteristic respresented by |characteristicId| happened. |data| and |writeType| is expected to exist when |type| is write.
	 *
	 * Method will block until first BluetoothEmulation.characteristicOperationReceived event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CharacteristicOperationReceivedEvent
	 */
	public function awaitCharacteristicOperationReceived(ContextInterface $ctx): CharacteristicOperationReceivedEvent;


	/**
	 * Event for when a descriptor operation of |type| to the descriptor respresented by |descriptorId| happened. |data| is expected to exist when |type| is write.
	 *
	 * Listener will be called whenever event BluetoothEmulation.descriptorOperationReceived is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addDescriptorOperationReceivedListener(callable $listener): SubscriptionInterface;


	/**
	 * Event for when a descriptor operation of |type| to the descriptor respresented by |descriptorId| happened. |data| is expected to exist when |type| is write.
	 *
	 * Method will block until first BluetoothEmulation.descriptorOperationReceived event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return DescriptorOperationReceivedEvent
	 */
	public function awaitDescriptorOperationReceived(ContextInterface $ctx): DescriptorOperationReceivedEvent;


	/**
	 * Event for when a GATT operation of |type| to the peripheral with |address| happened.
	 *
	 * Listener will be called whenever event BluetoothEmulation.gattOperationReceived is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addGattOperationReceivedListener(callable $listener): SubscriptionInterface;


	/**
	 * Event for when a GATT operation of |type| to the peripheral with |address| happened.
	 *
	 * Method will block until first BluetoothEmulation.gattOperationReceived event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return GattOperationReceivedEvent
	 */
	public function awaitGattOperationReceived(ContextInterface $ctx): GattOperationReceivedEvent;
}
