<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Response to Emulation.setVirtualTimePolicy command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetVirtualTimePolicyResponse implements \JsonSerializable
{
	/**
	 * Absolute timestamp at which virtual time was first enabled (up time in milliseconds).
	 *
	 * @var int|float
	 */
	public $virtualTimeTicksBase;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->virtualTimeTicksBase)) {
			$instance->virtualTimeTicksBase = $data->virtualTimeTicksBase;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->virtualTimeTicksBase !== null) {
			$data->virtualTimeTicksBase = $this->virtualTimeTicksBase;
		}
		return $data;
	}
}
