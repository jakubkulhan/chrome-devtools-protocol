<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setEmulatedOSTextScale command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEmulatedOSTextScaleRequest implements \JsonSerializable
{
	/** @var int|float|null */
	public $scale;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->scale)) {
			$instance->scale = $data->scale;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->scale !== null) {
			$data->scale = $this->scale;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetEmulatedOSTextScaleRequestBuilder
	 */
	public static function builder(): SetEmulatedOSTextScaleRequestBuilder
	{
		return new SetEmulatedOSTextScaleRequestBuilder();
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
