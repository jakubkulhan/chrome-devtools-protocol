<?php

namespace ChromeDevtoolsProtocol\Model\Overlay;

/**
 * Request for Overlay.setShowDisplayCutout command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetShowDisplayCutoutRequest implements \JsonSerializable
{
	/**
	 * display cutout data, null means hide display cutout
	 *
	 * @var DisplayCutoutConfig|null
	 */
	public $displayCutoutConfig;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->displayCutoutConfig)) {
			$instance->displayCutoutConfig = DisplayCutoutConfig::fromJson($data->displayCutoutConfig);
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->displayCutoutConfig !== null) {
			$data->displayCutoutConfig = $this->displayCutoutConfig->jsonSerialize();
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetShowDisplayCutoutRequestBuilder
	 */
	public static function builder(): SetShowDisplayCutoutRequestBuilder
	{
		return new SetShowDisplayCutoutRequestBuilder();
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
