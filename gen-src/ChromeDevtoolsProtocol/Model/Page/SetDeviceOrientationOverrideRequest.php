<?php

namespace ChromeDevtoolsProtocol\Model\Page;

/**
 * Request for Page.setDeviceOrientationOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDeviceOrientationOverrideRequest implements \JsonSerializable
{
	/**
	 * Mock alpha
	 *
	 * @var int|float
	 */
	public $alpha;

	/**
	 * Mock beta
	 *
	 * @var int|float
	 */
	public $beta;

	/**
	 * Mock gamma
	 *
	 * @var int|float
	 */
	public $gamma;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->alpha)) {
			$instance->alpha = $data->alpha;
		}
		if (isset($data->beta)) {
			$instance->beta = $data->beta;
		}
		if (isset($data->gamma)) {
			$instance->gamma = $data->gamma;
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
		if ($this->alpha !== null) {
			$data->alpha = $this->alpha;
		}
		if ($this->beta !== null) {
			$data->beta = $this->beta;
		}
		if ($this->gamma !== null) {
			$data->gamma = $this->gamma;
		}
		return $data;
	}


	/**
	 * Create new instance using builder.
	 *
	 * @return SetDeviceOrientationOverrideRequestBuilder
	 */
	public static function builder(): SetDeviceOrientationOverrideRequestBuilder
	{
		return new SetDeviceOrientationOverrideRequestBuilder();
	}
}
