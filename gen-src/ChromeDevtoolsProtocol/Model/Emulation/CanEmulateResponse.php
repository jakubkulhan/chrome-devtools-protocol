<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Response to Emulation.canEmulate command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CanEmulateResponse implements \JsonSerializable
{
	/**
	 * True if emulation is supported.
	 *
	 * @var bool
	 */
	public $result;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->result)) {
			$instance->result = (bool)$data->result;
		}
		return $instance;
	}


	public function jsonSerialize(): mixed
	{
		$data = new \stdClass();
		if ($this->result !== null) {
			$data->result = $this->result;
		}
		return $data;
	}
}
