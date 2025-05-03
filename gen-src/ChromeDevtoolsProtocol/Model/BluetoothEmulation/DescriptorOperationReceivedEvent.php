<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Event for when a descriptor operation of |type| to the descriptor respresented by |descriptorId| happened. |data| is expected to exist when |type| is write.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class DescriptorOperationReceivedEvent implements \JsonSerializable
{
	/** @var string */
	public $descriptorId;

	/** @var string */
	public $type;

	/** @var string|null */
	public $data;


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
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->descriptorId !== null) {
			$data->descriptorId = $this->descriptorId;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		return $data;
	}
}
