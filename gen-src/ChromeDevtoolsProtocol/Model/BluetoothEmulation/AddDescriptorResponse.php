<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Response to BluetoothEmulation.addDescriptor command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class AddDescriptorResponse implements \JsonSerializable
{
	/**
	 * An identifier that uniquely represents this descriptor.
	 *
	 * @var string
	 */
	public $descriptorId;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->descriptorId)) {
			$instance->descriptorId = (string)$data->descriptorId;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->descriptorId !== null) {
			$data->descriptorId = $this->descriptorId;
		}
		return $data;
	}
}
