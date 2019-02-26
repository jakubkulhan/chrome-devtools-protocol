<?php

namespace ChromeDevtoolsProtocol\Model\IndexedDB;

/**
 * Response to IndexedDB.getKeyGeneratorCurrentNumber command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class GetKeyGeneratorCurrentNumberResponse implements \JsonSerializable
{
	/**
	 * the current value of key generator, to become the next inserted key into the object store.
	 *
	 * @var int|float
	 */
	public $currentNumber;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->currentNumber)) {
			$instance->currentNumber = $data->currentNumber;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->currentNumber !== null) {
			$data->currentNumber = $this->currentNumber;
		}
		return $data;
	}
}
