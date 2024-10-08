<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Request for BluetoothEmulation.simulateAdvertisement command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SimulateAdvertisementRequest implements \JsonSerializable
{
	/** @var ScanEntry */
	public $entry;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->entry)) {
			$instance->entry = ScanEntry::fromJson($data->entry);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->entry !== null) {
			$data->entry = $this->entry->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SimulateAdvertisementRequestBuilder
	 */
	public static function builder(): SimulateAdvertisementRequestBuilder
	{
		return new SimulateAdvertisementRequestBuilder();
	}
}
