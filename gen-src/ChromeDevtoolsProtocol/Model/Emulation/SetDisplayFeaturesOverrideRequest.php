<?php

namespace ChromeDevtoolsProtocol\Model\Emulation;

/**
 * Request for Emulation.setDisplayFeaturesOverride command.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class SetDisplayFeaturesOverrideRequest implements \JsonSerializable
{
	/** @var DisplayFeature[] */
	public $features;


	/**
	 * @param object $data
	 * @return static
	 */
	public static function fromJson($data)
	{
		$instance = new static();
		if (isset($data->features)) {
			$instance->features = [];
			foreach ($data->features as $item) {
				$instance->features[] = DisplayFeature::fromJson($item);
			}
		}
		return $instance;
	}


	public function jsonSerialize()
	{
		$data = new \stdClass();
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
	 * @return SetDisplayFeaturesOverrideRequestBuilder
	 */
	public static function builder(): SetDisplayFeaturesOverrideRequestBuilder
	{
		return new SetDisplayFeaturesOverrideRequestBuilder();
	}
}
