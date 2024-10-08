<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setEmulatedMedia command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetEmulatedMediaRequest implements \JsonSerializable
{
	/**
	 * Media type to emulate. Empty string disables the override.
	 *
	 * @var string|null
	 */
	public $media;

	/**
	 * Media features to emulate.
	 *
	 * @var MediaFeature[]|null
	 */
	public $features;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->media)) {
			$instance->media = (string)$data->media;
		}
		if (isset($data->features)) {
			$instance->features = [];
			foreach ($data->features as $item) {
				$instance->features[] = MediaFeature::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->media !== null) {
			$data->media = $this->media;
		}
		if ($this->features !== null) {
			$data->features = [];
			foreach ($this->features as $item) {
				$data->features[] = $item->jsonSerialize();
			}
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetEmulatedMediaRequestBuilder
	 */
	public static function builder(): SetEmulatedMediaRequestBuilder
	{
		return new SetEmulatedMediaRequestBuilder();
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
