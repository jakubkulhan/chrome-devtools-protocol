<?php

namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\EnableRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulateAdvertisementRequest;
use ChromeDevtoolsProtocol\Model\BluetoothEmulation\SimulatePreconnectedPeripheralRequest;

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
	 * Simulates an advertisement packet described in |entry| being received by the central.
	 *
	 * @param ContextInterface $ctx
	 * @param SimulateAdvertisementRequest $request
	 *
	 * @return void
	 */
	public function simulateAdvertisement(ContextInterface $ctx, SimulateAdvertisementRequest $request): void;


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
}
