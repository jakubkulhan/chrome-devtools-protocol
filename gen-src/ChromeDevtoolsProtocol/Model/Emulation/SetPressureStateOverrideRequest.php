<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setPressureStateOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPressureStateOverrideRequest implements \JsonSerializable
{
	/** @var string */
	public $source;

	/** @var string */
	public $state;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->source)) {
			$instance->source = (string)$data->source;
		}
		if (isset($data->state)) {
			$instance->state = (string)$data->state;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->source !== null) {
			$data->source = $this->source;
		}
		if ($this->state !== null) {
			$data->state = $this->state;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPressureStateOverrideRequestBuilder
	 */
	public static function builder(): SetPressureStateOverrideRequestBuilder
	{
		return new SetPressureStateOverrideRequestBuilder();
	}
}
