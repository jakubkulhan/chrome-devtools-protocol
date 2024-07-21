<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setPressureSourceOverrideEnabled command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetPressureSourceOverrideEnabledRequest implements \JsonSerializable
{
	/** @var bool */
	public $enabled;

	/** @var string */
	public $source;

	/** @var PressureMetadata|null */
	public $metadata;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->enabled)) {
			$instance->enabled = (bool)$data->enabled;
		}
		if (isset($data->source)) {
			$instance->source = (string)$data->source;
		}
		if (isset($data->metadata)) {
			$instance->metadata = PressureMetadata::fromJson($data->metadata);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->enabled !== null) {
			$data->enabled = $this->enabled;
		}
		if ($this->source !== null) {
			$data->source = $this->source;
		}
		if ($this->metadata !== null) {
			$data->metadata = $this->metadata->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetPressureSourceOverrideEnabledRequestBuilder
	 */
	public static function builder(): SetPressureSourceOverrideEnabledRequestBuilder
	{
		return new SetPressureSourceOverrideEnabledRequestBuilder();
	}
}
