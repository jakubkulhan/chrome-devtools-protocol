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
	 * Absolute timestamp at which virtual time was first enabled (milliseconds since epoch).
	 *
	 * @var int|float
	 */
	public $virtualTimeBase;


	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->virtualTimeBase)) {
			$instance->virtualTimeBase = $data->virtualTimeBase;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->virtualTimeBase !== null) {
			$data->virtualTimeBase = $this->virtualTimeBase;
		}
		return $data;
	}
}
