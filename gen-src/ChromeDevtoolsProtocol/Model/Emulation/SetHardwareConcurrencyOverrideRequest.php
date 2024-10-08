<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setHardwareConcurrencyOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetHardwareConcurrencyOverrideRequest implements \JsonSerializable
{
	/**
	 * Hardware concurrency to report
	 *
	 * @var int
	 */
	public $hardwareConcurrency;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->hardwareConcurrency)) {
			$instance->hardwareConcurrency = (int)$data->hardwareConcurrency;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->hardwareConcurrency !== null) {
			$data->hardwareConcurrency = $this->hardwareConcurrency;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetHardwareConcurrencyOverrideRequestBuilder
	 */
	public static function builder(): SetHardwareConcurrencyOverrideRequestBuilder
	{
		return new SetHardwareConcurrencyOverrideRequestBuilder();
	}
}
