<?php

namespace ChromeDevtoolsProtocol\Model\BluetoothEmulation;

/**
 * Event for when a characteristic operation of |type| to the characteristic respresented by |characteristicId| happened. |data| and |writeType| is expected to exist when |type| is write.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CharacteristicOperationReceivedEvent implements \JsonSerializable
{
	/** @var string */
	public $characteristicId;

	/** @var string */
	public $type;

	/** @var string|null */
	public $data;

	/** @var string */
	public $writeType;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->characteristicId)) {
			$instance->characteristicId = (string)$data->characteristicId;
		}
		if (isset($data->type)) {
			$instance->type = (string)$data->type;
		}
		if (isset($data->data)) {
			$instance->data = (string)$data->data;
		}
		if (isset($data->writeType)) {
			$instance->writeType = (string)$data->writeType;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->characteristicId !== null) {
			$data->characteristicId = $this->characteristicId;
		}
		if ($this->type !== null) {
			$data->type = $this->type;
		}
		if ($this->data !== null) {
			$data->data = $this->data;
		}
		if ($this->writeType !== null) {
			$data->writeType = $this->writeType;
		}
		return $data;
	}
}
