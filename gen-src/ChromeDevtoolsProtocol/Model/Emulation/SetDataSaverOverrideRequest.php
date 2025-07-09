<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setDataSaverOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDataSaverOverrideRequest implements \JsonSerializable
{
	/**
	 * Override value. Omitting the parameter disables the override.
	 *
	 * @var bool|null
	 */
	public $dataSaverEnabled;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->dataSaverEnabled)) {
			$instance->dataSaverEnabled = (bool)$data->dataSaverEnabled;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->dataSaverEnabled !== null) {
			$data->dataSaverEnabled = $this->dataSaverEnabled;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDataSaverOverrideRequestBuilder
	 */
	public static function builder(): SetDataSaverOverrideRequestBuilder
	{
		return new SetDataSaverOverrideRequestBuilder();
	}


	/**
	 * Create new empty instance.
	 *
	 * @return self
	 */
	public static function make(): self
	{
		return static::builder()->build();
	}
}
